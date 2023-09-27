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
Route::get('addmember/{id}',[HomeController::class,'addmember'])->name('addmember');
Route::get('familyrecord/{id}',[HomeController::class,'familyrecord'])->name('familyrecord');
Route::get('delete_member/{id}',[HomeController::class,'delete_member'])->name('delete_member');
Route::get('edit_member/{id}',[HomeController::class,'editmember'])->name('editmember');
Route::post('saveemployee',[HomeController::class,'saveemployee'])->name('saveemployee');
Route::post('savemember',[HomeController::class,'savemember'])->name('savemember');
Route::get('delete_employee/{id}',[HomeController::class,'delete_employee'])->name('delete_employee');
Route::get('edit_employee/{id}',[HomeController::class,'editemployee'])->name('editemployee');
Route::post('updateemployee',[HomeController::class,'updateemployee'])->name('updateemployee');
Route::post('updatemember',[HomeController::class,'updatemember'])->name('updatemember');
Route::get('attendance',[HomeController::class,'attendance'])->name('attendance');
Route::get('attendancerecord',[HomeController::class,'attendancerecord'])->name('attendancerecord');
Route::post('filter',[HomeController::class,'filter'])->name('filter');
Route::post('filter2',[HomeController::class,'filter2'])->name('filter2');
Route::post('filter3',[HomeController::class,'filter3'])->name('filter3');
Route::post('saveattendance',[HomeController::class,'saveattendance'])->name('saveattendance');
Route::get('employeesalary',[HomeController::class,'employeesalary'])->name('employeesalary');
Route::get('payslip/{id}',[HomeController::class,'payslip'])->name('payslip');
Route::get('cashbook',[HomeController::class,'cashbook'])->name('cashbook');
Route::post('savecategory',[HomeController::class,'savecategory'])->name('savecategory');
Route::get('expenses',[HomeController::class,'expenses'])->name('expenses');
Route::get('addcategory',[HomeController::class,'addcategory'])->name('addcategory');
Route::get('tally',[HomeController::class,'tally'])->name('tally');
Route::post('saveexpenses',[HomeController::class,'saveexpenses'])->name('saveexpenses');
Route::get('addclient',[HomeController::class,'addclient'])->name('addclient');
Route::get('clientlist',[HomeController::class,'clientlist'])->name('clientlist');
Route::get('share/{id}',[HomeController::class,'share'])->name('share');
Route::post('sharable',[HomeController::class,'sharable'])->name('sharable');
Route::post('saveclient',[HomeController::class,'saveclient'])->name('saveclient');
Route::get('addcontract',[HomeController::class,'addcontract'])->name('addcontract');
Route::post('savecontract',[HomeController::class,'savecontract'])->name('savecontract');
Route::get('contractnote/{id}',[HomeController::class,'contractnote'])->name('contractnote');
Route::get('edit_contract/{id}',[HomeController::class,'editcontract'])->name('editcontract');
Route::get('editclient/{id}',[HomeController::class,'editclient'])->name('editclient');
Route::post('updateclient',[HomeController::class,'updateclient'])->name('updateclient');
Route::get('previousversions/{orderno}',[HomeController::class,'previousversions'])->name('previousversions');
Route::post('updatecontract',[HomeController::class,'updatecontract'])->name('updatecontract');
Route::get('contractlist',[HomeController::class,'contractlist'])->name('contractlist');
Route::get('deliverybook',[HomeController::class,'deliverybook'])->name('deliverybook');
Route::get('markstatus/{id}',[HomeController::class,'markstatus'])->name('markstatus');
Route::post('createbrokeragebill',[HomeController::class,'createbrokeragebill'])->name('createbrokeragebill');
// Route::get('logout',[HomeController::class,'logout'])->name('logout');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
