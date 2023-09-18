<?php

namespace App\Http\Controllers;

use App\Models\AttendanceRecord;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DateTime;


class HomeController extends Controller
{
    public function employees(Request $request){
        if($request->ajax())
        {
            $data = Employee::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn =' <a href="'.route('editemployee',$row->id).'"><i class="fa fa-pencil"></i></a>';
                        $btn = $btn.' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        // if(Session::has('user')){
            return view('employees');
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
            'joining' => 'required',
        ]);
        $employee = new Employee;
        $employee->name = $validated['name'];
        $employee->age = $validated['age'];
        $employee->phone = $validated['phone'];
        $employee->salary = $validated['salary'];
        $employee->joining = $validated['joining'];
        $employee->save();
        return redirect()->route('employees')->with('success','Employee added Successfully!!');
    }

    public function delete_employee($id){
        $employee = Employee::find($id);
        $attendances = AttendanceRecord::where('employee_id',$id)->get();
        if($attendances){
            foreach($attendances as $attendance){
                $attendance->delete();
            }
        }
        $employee->delete();
        return redirect()->route('employees');
    }

    public function editemployee($id){
        $employee = Employee::find($id);
        return view('editemployee',compact('employee'));
    }

    public function updateemployee(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'age' => 'required|numeric',
            'phone' => 'required|digits:10|numeric',
            'salary' => 'required',
            'joining' => 'required',
        ]);
        $employee = Employee::where('id',$request->id)->first();
        $employee->name = $validated['name'];
        $employee->age = $validated['age'];
        $employee->phone = $validated['phone'];
        $employee->salary = $validated['salary'];
        $employee->joining = $validated['joining'];
        $employee->save();
        return redirect()->route('employees')->with('success','Employee updated Successfully!!');
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
                $attendance->save();    
            }else{
                $attendance = new AttendanceRecord;
                $attendance->employee_id = $request->id[$i];
                $attendance->status = $request->status[$i];
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
            'month' => 'required'
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
        foreach($attendance as $a){
            if($a->status == 'present'){
                $presents++;
            }elseif($a->status == 'absent'){
                $absents++;
            }elseif($a->status == 'halfday'){
                $halfdays++;
            }else{
                $absents++;
            }
        }
        if(($working_days - $presents - $halfdays/2) > 2){
            $total_days = $presents + $halfdays/2 + 2;
        }else{
            $total_days = $working_days;
        }
        $final_salary = ($employee->salary/$working_days)*($total_days);
        $data = [
            'working' => $working_days,
            'present' => $presents,
            'absent' => $absents,
            'halfday' => $halfdays,
            'salary' => $final_salary,
            'year' => $request->year,
            'month' => $request->month,
        ];
        return view('payslip',compact('employee','data'));

    }
}

