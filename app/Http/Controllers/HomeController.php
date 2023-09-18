<?php

namespace App\Http\Controllers;

use App\Models\AttendanceRecord;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


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
            $attendance = new AttendanceRecord;
            $attendance->employee_id = $request->id[$i];
            $attendance->status = $request->status[$i];
            $attendance->date = $request->date;
            $attendance->save(); 
        }
        return redirect()->route('employees');
    }
}

