<?php

use App\Http\Controllers\HomeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $employee_count = count(Employee::all());
    $total_salary = Employee::sum('salary');
    
    return view('index',compact('employee_count','total_salary'));
})->name('index');
Route::get('employees',[HomeController::class,'employees'])->name('employees');
Route::get('addemployee',[HomeController::class,'addemployee'])->name('addemployee');
Route::post('saveemployee',[HomeController::class,'saveemployee'])->name('saveemployee');
Route::get('delete_employee/{id}',[HomeController::class,'delete_employee'])->name('delete_employee');
Route::get('edit_employee/{id}',[HomeController::class,'editemployee'])->name('editemployee');
Route::post('updateemployee',[HomeController::class,'updateemployee'])->name('updateemployee');
Route::get('attendance',[HomeController::class,'attendance'])->name('attendance');
Route::get('attendancerecord',[HomeController::class,'attendancerecord'])->name('attendancerecord');
Route::post('filter',[HomeController::class,'filter'])->name('filter');
Route::post('filter2',[HomeController::class,'filter2'])->name('filter2');
Route::post('filter3',[HomeController::class,'filter3'])->name('filter3');
Route::post('saveattendance',[HomeController::class,'saveattendance'])->name('saveattendance');
Route::get('employeesalary',[HomeController::class,'employeesalary'])->name('employeesalary');
Route::get('payslip/{id}',[HomeController::class,'payslip'])->name('payslip');
Route::get('cashbook',[HomeController::class,'cashbook'])->name('cashbook');
Route::get('expenses',[HomeController::class,'expenses'])->name('expenses');
Route::get('tally',[HomeController::class,'tally'])->name('tally');
Route::post('saveexpenses',[HomeController::class,'saveexpenses'])->name('saveexpenses');
Route::get('addclient',[HomeController::class,'addclient'])->name('addclient');
Route::get('clientlist',[HomeController::class,'clientlist'])->name('clientlist');
Route::post('saveclient',[HomeController::class,'saveclient'])->name('saveclient');
Route::get('addcontract',[HomeController::class,'addcontract'])->name('addcontract');
Route::post('savecontract',[HomeController::class,'savecontract'])->name('savecontract');
Route::get('contractnote/{id}',[HomeController::class,'contractnote'])->name('contractnote');
Route::get('contractlist',[HomeController::class,'contractlist'])->name('contractlist');
Route::get('logout',[HomeController::class,'logout'])->name('logout');
