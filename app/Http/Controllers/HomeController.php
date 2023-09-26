<?php

namespace App\Http\Controllers;

use App\Models\AttendanceRecord;
use App\Models\CashBook;
use App\Models\ContractNote;
use App\Models\Employee;
use App\Models\ExpensesCategory;
use App\Models\FamilyMember;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DateTime;
use Illuminate\Support\Facades\Session;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $employee_count = count(Employee::all());
        $total_salary = Employee::sum('salary');
    
        return view('index',compact('employee_count','total_salary'));
    }
    public function employees(){
        $employees = Employee::all();
        // if(Session::has('user')){
            return view('employees',compact('employees'));
        // }else{return redirect()->route('index');}
    }
    public function addemployee(){
        return view('addemployee');
    }

    public function saveemployee(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'phone' => 'required|digits:10|numeric',
            'salary' => 'required',
            'adhaar' => 'required|numeric',
            'pan' => 'required',
            'bank' => 'required',
            'members' => 'required|numeric',
            'joining' => 'required',
        ]);
        $employee = new Employee;
        $employee->name = $validated['name'];
        $employee->age = $validated['age'];
        $employee->phone = $validated['phone'];
        $employee->salary = $validated['salary'];
        $employee->joining = $validated['joining'];
        $employee->pan = $validated['pan'];
        $employee->adhaar = $validated['adhaar'];
        $employee->bank = $validated['bank'];
        $employee->members = $validated['members'];
        $employee->save();
        
        for($i=0; $i<$validated['members']; $i++){
            $member = new FamilyMember;
            $member->employee_id = $employee->id;
            $member->name = $request->fname[$i];
            $member->phone = $request->fphone[$i];
            $member->pan = $request->fpan[$i];
            $member->adhaar = $request->fadhaar[$i];
            $member->relation = $request->relationship[$i];
            $member->save();
        }
        return redirect()->route('employees')->with('success','Employee added Successfully!!');
    }

    public function delete_employee($id){
        $employee = Employee::find($id);
        $members = FamilyMember::where('employee_id',$id)->get();
        $attendances = AttendanceRecord::where('employee_id',$id)->get();
        if($attendances){
            foreach($attendances as $attendance){
                $attendance->delete();
            }
        }
        if($members){
            foreach($members as $member){
                $member->delete();
            }
        }
        $employee->delete();
        return redirect()->route('employees');
    }
    public function delete_member($id){
        $member = FamilyMember::find($id);
        $member->delete();
        return redirect()->back();
    }

    public function editemployee($id){
        $employee = Employee::find($id);
        return view('editemployee',compact('employee'));
    }

    public function editmember($id){
        $member = FamilyMember::find($id);
        return view('editmember',compact('member'));
    }

    public function addmember($id){
        return view('addmember',compact('id'));
    }

    public function updateemployee(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'age' => 'required|numeric',
            'phone' => 'required|digits:10|numeric',
            'salary' => 'required',
            'adhaar' => 'required|numeric',
            'pan' => 'required',
            'bank' => 'required',
            'joining' => 'required',
        ]);
        $employee = Employee::where('id',$request->id)->first();
        $employee->name = $validated['name'];
        $employee->age = $validated['age'];
        $employee->phone = $validated['phone'];
        $employee->salary = $validated['salary'];
        $employee->joining = $validated['joining'];
        $employee->adhaar = $validated['adhaar'];
        $employee->pan = $validated['pan'];
        $employee->bank = $validated['bank'];
        $employee->save();
        return redirect()->route('employees')->with('success','Employee updated Successfully!!');
    }

    public function savemember(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required|digits:10|numeric',
            'pan' => 'required',
            'adhaar' => 'required|numeric',
            'relation' => 'required',
        ]);
        $member = new FamilyMember;
        $member->employee_id = $validated['id'];
        $member->name = $validated['name'];
        $member->phone = $validated['phone'];
        $member->pan = $validated['pan'];
        $member->adhaar = $validated['adhaar'];
        $member->relation = $validated['relation'];
        $member->save();
        return redirect()->route('familyrecord',['id' => $member->employee_id])->with('success','Member added Successfully!!');
    }
    public function updatemember(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required|digits:10|numeric',
            'pan' => 'required',
            'adhaar' => 'required|numeric',
            'relation' => 'required',
        ]);
        $member = FamilyMember::where('id',$validated['id'])->first();
        $member->name = $validated['name'];
        $member->phone = $validated['phone'];
        $member->pan = $validated['pan'];
        $member->adhaar = $validated['adhaar'];
        $member->relation = $validated['relation'];
        $member->save();

        return redirect()->route('familyrecord',['id' => $member->employee_id])->with('success','Member updated Successfully!!');
    }

    public function familyrecord($id){
        $members = FamilyMember::where('employee_id',$id)->get();
        return view('familyrecord',compact('members','id'));
    }

    public function attendance(){
        $employees = Employee::all();
        // if(Session::has('user')){
            return view('attendance',compact('employees'));
        // }else{return redirect()->route('index');}
        
    }

    public function attendancerecord(){
        $employees = Employee::all();
        // if(Session::has('user')){
            return view('attendancerecord',compact('employees'));
        // }else{return redirect()->route('index');}
        
    }

    public function filter(Request $request){
        $validated = $request->validate([
            'year' => 'required',
            'month' => 'required'
        ]);
        $employees = Employee::all();
        $date = $request->year.'-'.$request->month.'-';
        return view('attendancerecord',compact('date','employees'));
    }

    public function saveattendance(Request $request){
        $validated = $request->validate([
            'date' => 'required',
            'name' => 'required',
            'status' => 'required',
            'id' => 'required',
        ]);

        $count = count(Employee::all());
        for($i=0; $i<$count; $i++){
            $attendance = AttendanceRecord::where('date',$request->date)->where('employee_id',$request->id[$i])->first();
            if($attendance){
                $attendance->status = $request->status[$i];
                $attendance->fuel = $request->fuel[$i];
                $attendance->save();    
            }else{
                $attendance = new AttendanceRecord;
                $attendance->employee_id = $request->id[$i];
                $attendance->status = $request->status[$i];
                $attendance->fuel = $request->fuel[$i];
                $attendance->date = $request->date;
                $attendance->save(); 
            }
        }
        return redirect()->route('employees');
    }

    public function employeesalary(){
        $employees = Employee::all();
        return view('employeesalary',compact('employees'));
    }

    public function payslip($id){
        $employee = Employee::find($id);
        return view('payslip',compact('employee'));
    }  

    public function filter2(Request $request){
        $validated = $request->validate([
            'year' => 'required',
            'month' => 'required',
            'paid' => 'required|numeric'
        ]);
        $employee = Employee::find($request->id);
        $attendance = AttendanceRecord::where('employee_id',$request->id)->whereYear('date',$request->year)->whereMonth('date',$request->month)->get();
        $date = new DateTime("$request->year-$request->month-01");
        $sundays = 0;
        while($date->format('m') == $request->month){
            if($date->format('w') == 0){
                $sundays++;
            }
            $date->modify('+1 day');
        }
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $request->month, $request->year);
        $working_days = $daysInMonth - $sundays;
        $presents = 0;
        $absents = 0;
        $halfdays = 0;
        $fuel = 0;
        foreach($attendance as $a){
            if($a->status == 'present'){
                $presents++;
                if($a->fuel == 'yes'){
                    $fuel++;
                }
            }elseif($a->status == 'absent'){
                $absents++;
                if($a->fuel == 'yes'){
                    $fuel++;
                }
            }elseif($a->status == 'halfday'){
                $halfdays++;
                if($a->fuel == 'yes'){
                    $fuel++;
                }
            }else{
                $absents++;
            }
        }
        if($presents + $halfdays/2 == 0){
            $total_days = 0;
        }
        elseif(($working_days - $presents - $halfdays/2) > $request->paid){
            $total_days = $presents + $halfdays/2 + $request->paid;
        }else{
            $total_days = $working_days;
        }
        $final_salary = ($employee->salary/$working_days)*($total_days);
        $data = [
            'working' => $working_days,
            'present' => $presents,
            'absent' => $absents,
            'halfday' => $halfdays,
            'fuel' => $fuel,
            'salary' => $final_salary,
            'year' => $request->year,
            'month' => $request->month,
            'paid' => $request->paid
        ];
        return view('payslip',compact('employee','data'));
    }

    public function cashbook(){
        $reasons = ExpensesCategory::all();
        return view('cashbook',compact('reasons'));
    }

    public function savecategory(Request $request){
        $validated = $request->validate([
            'cat' => 'required',
        ]);
        $cat = new ExpensesCategory;
        $cat->name = $validated['cat'];
        $cat->save();
        return redirect()->back()->with('success','Category added Successfully!!');
    }

    public function saveexpenses(Request $request){
        $validated = $request->validate([
            'date' => 'required',
            'reason' => 'required',
            'amount' => 'required',
            'paid' => 'required',
            'paidto' => 'required',
        ]);
        $expense = new CashBook;
        $expense->date = $validated['date'];
        $expense->reason = $validated['reason'];
        $expense->amount = $validated['amount'];
        $expense->paid_by = $validated['paid'];
        $expense->paid_to = $validated['paidto'];
        $expense->note = $request->note;
        $expense->save();
        return redirect()->route('expenses');
    }

    public function expenses(){
        $expenses = CashBook::all();
        return view('expenses',compact('expenses'));
    }

    public function tally(){
        $curr_year = date('Y');
        $expenses = [];
        for($i=1; $i<13; $i++){
            if($i < 10){
                $month = '0'.$i;
            }else{
                $month = $i;
            }
            $total_amount = CashBook::whereYear('date',$curr_year)->whereMonth('date',$month)->sum('amount');
            $expenses[$i] = $total_amount;

        }
        return view('tally',compact('expenses'));
    }

    public function filter3(request $request){
        $validated = $request->validate([
            'year' => 'required',
            'month' => 'required',
        ]);
        $expenses = CashBook::whereYear('date',$validated['year'])->whereMonth('date',$validated['month'])->get();
        $total_amount = CashBook::whereYear('date',$validated['year'])->whereMonth('date',$validated['month'])->sum('amount');
        $count = count($expenses);
        $data = [
            'total' => $total_amount,
            'count' => $count,
            'month' => $request->month,
            'year' => $request->year
        ];
        return view('tally',compact('data'));
    }

    public function contractnote($id){
        $contract = ContractNote::find($id);
        return view('contractnote',compact('contract'));
    }

    public function addclient(){
        return view('addclient');
    }

    public function saveclient(Request $request){
        $validated = $request->validate([
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|digits:10|numeric',
            'address' => 'required',
            'pan' => 'required',
            'gst' => 'required',
            'fassi' => 'required',
            'faddress' => 'required',
            'baddress' => 'required',
            'bank' => 'required',
            'cnumber' => 'required',
            'cperson' => 'required',
            'tanno' => 'required',
        ]);
        $client = new User;
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->phone = $validated['phone'];
        $client->password = bcrypt(Str::random(10));
        $client->role = $validated['role'];
        $client->address = $validated['address'];
        $client->pan = $validated['pan'];
        $client->gst = $validated['gst'];
        $client->fassi = $validated['fassi'];
        $client->faddress = $validated['faddress'];
        $client->baddress = $validated['baddress'];
        $client->bank = $validated['bank'];
        $client->cnumber = $validated['cnumber'];
        $client->cperson = $validated['cperson'];
        $client->tanno = $validated['tanno'];
        if($request->iec){
            $client->iec = $request->iec;
        }
        $client->save();

        return redirect()->route('clientlist')->with('success','Client added Successfully!!');
    }

    public function clientlist(){
        $clients = User::where('role','client')->get();
        return view('clientlist',compact('clients'));
    }

    public function addcontract(){
        $clients = User::where('role','client')->get();
        return view('addcontract',compact('clients'));
    }

    public function savecontract(Request $request){
        $validated = $request->validate([
            'date' => 'required',
            'purchaser' => 'required',
            'seller' => 'required',
            'commodity' => 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'gst' => 'required',
            'time' => 'required',
            'condition' => 'required',
            'charge' => 'required',
        ]);

        $contract = new ContractNote;
        $contract->date = $validated['date'];
        $contract->purchaser = $validated['purchaser'];
        $contract->seller = $validated['seller'];
        $contract->commodity = $validated['commodity'];
        $contract->quantity = $validated['quantity'];
        $contract->rate = $validated['rate'];
        $contract->gst = $validated['gst'];
        $contract->time = $validated['time'];
        $contract->condition = $validated['condition'];
        $contract->charge = $validated['charge'];
        $contract->save();
        $contract->orderno = $contract->id;
        $contract->save();
        return redirect()->route('contractnote',['id'=>$contract->id])->with('success','Contract added Successfully!!');
    }

    public function editcontract($id, Request $request){
        $clients = User::where('role','client')->get();
        $contract  = ContractNote::find($id);
        return view('editcontract',compact('contract','clients'));
    }

    public function updatecontract(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'date' => 'required',
            'purchaser' => 'required',
            'seller' => 'required',
            'commodity' => 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'gst' => 'required',
            'time' => 'required',
            'condition' => 'required',
            'charge' => 'required',
        ]);
        $contract = ContractNote::where('id',$validated['id'])->first();
        $newcontract = new ContractNote;
        $newcontract->date = $validated['date'];
        $newcontract->purchaser = $validated['purchaser'];
        $newcontract->seller = $validated['seller'];
        $newcontract->commodity = $validated['commodity'];
        $newcontract->quantity = $validated['quantity'];
        $newcontract->rate = $validated['rate'];
        $newcontract->gst = $validated['gst'];
        $newcontract->time = $validated['time'];
        $newcontract->condition = $validated['condition'];
        $newcontract->charge = $validated['charge'];
        $newcontract->orderno = $contract->orderno;
        $newcontract->version = $contract->version + 1;
        $newcontract->save();
        return redirect()->route('contractnote',['id'=>$newcontract->id])->with('success','Contract updated Successfully!!');

    }

    public function contractlist(){
        $uniqueOrders = ContractNote::select('orderno', DB::raw('MAX(version) as max_version'))
        ->groupBy('orderno')
        ->get();

        $contracts = ContractNote::whereIn(DB::raw('(orderno, version)'), function ($query) {
                $query->select(DB::raw('orderno, MAX(version) as version'))
                    ->from('contract_notes')
                    ->groupBy('orderno');
            })
            ->get();
        // $contracts = ContractNote::all();
        return view('contractlist',compact('contracts'));
    }

    public function previousversions($orderno){
        $contracts = ContractNote::where('orderno',$orderno)->get();
        return view('previousversions',compact('contracts'));
    }
    
    public function share($id){
        return view('share',compact('id'));
    }
    
    public function sharable(Request $request){
        $client = User::find($request->id);
        $data = [];
        if($request->name == 'yes'){
            $data['name'] = $client->name;
        }else{$data['name'] = null;}
        if($request->email == 'yes'){
            $data['email'] = $client->email;
        }else{$data['email'] = null;}
        if($request->pan == 'yes'){
            $data['pan'] = $client->pan;
        }else{$data['pan'] = null;}
        if($request->fassi == 'yes'){
            $data['fassi'] = $client->fassi;
        }else{$data['fassi'] = null;}
        if($request->iec == 'yes'){
            $data['iec'] = $client->iec;
        }else{$data['iec'] = null;}
        if($request->tanno == 'yes'){
            $data['tanno'] = $client->tanno;
        }else{$data['tanno'] = null;}
        if($request->gst == 'yes'){
            $data['gst'] = $client->gst;
        }else{$data['gst'] = null;}
        if($request->phone == 'yes'){
            $data['phone'] = $client->phone;
        }else{$data['phone'] = null;}
        if($request->bank == 'yes'){
            $data['bank'] = $client->bank;
        }else{$data['bank'] = null;}
        if($request->address == 'yes'){
            $data['address'] = $client->address;
        }else{$data['address'] = null;}
        if($request->faddress == 'yes'){
            $data['faddress'] = $client->faddress;
        }else{$data['faddress'] = null;}
        if($request->baddress == 'yes'){
            $data['baddress'] = $client->baddress;
        }else{$data['baddress'] = null;}
        if($request->cperson == 'yes'){
            $data['cperson'] = $client->cperson;
        }else{$data['cperson'] = null;}
        if($request->cnumber == 'yes'){
            $data['cnumber'] = $client->cnumber;
        }else{$data['cnumber'] = null;}
        return view('clientsheet',compact('data'));
    }
    
}

