<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('CustomerHome',function(){
    return view('customer_home');
});

Route::get('Login',function(){
    return view('login');
});

Route::get('SignUp',function(){
    return view('sign_up');
});

Route::get('AddProduct',function(){
    return view('add_product');
});

Route::view('Sum','sum') -> middleware('ckuser');
Route::post('Sum',[TestController::class,'TestFunction']);

Route::view('Home','home');
Route::view('Profile','profile');


Route::get('Test',[TestController::class,'StudentList']);

Route::view('StudentRegister','student_registration');
Route::post('StudentRegister',[TestController::class,'fnStudentRegister']);
Route::get('Students',[TestController::class,'fnGetStudents']);

Route::get('Student',[TestController::class,'fnGetAStudent']);

Route::get('DeleteStudent/{Id}',[TestController::class,'fnDelStudent']);
Route::get('UpdateStudent/{Id}',[TestController::class,'fnRetrieveStudentData']);
Route::post('StudentUpdateData/{Id}',[TestController::class,'fnUpdateStudent']);


Route::view('StudentLogin','studentlogin');
Route::post('StudentLogin',[TestController::class,'fnStudentLogin']);
Route::get('HomePage',[TestController::class,'fnRetrieveHome']);
Route::get('LogOut',[TestController::class,'fnLogout']);

Route::view('Studentprofile','student_profile');
Route::post('Studentprofile',[TestController::class,'fnSaveStudentProfile']);
Route::get('ViewStudentProfile',[TestController::class,'fnGetStudentsProfile']);

//Route::view('DepartmentDetails',[TestController::class,'fnSaveDepartmentDetails']);

Route::view('RegisterCustomer','customer_register');
Route::post('RegisterCustomer',[TestController::class,'fnSaveCustomer']);

Route::get('ViewCustomer',[TestController::class,'fnGetCustomers']);
Route::get('DeleteCustomer/{Id}',[TestController::class,'fnDelCustomer']);

Route::view('empreg','employeereg');
Route::post('checkusername',[TestController::class,'fnCheckuser']);

Route::view('addempcategory','employee_category');
Route::post('empcategory',[TestController::class,'fnAddEmployeeCategory']);
Route::view('getempcategory','employee_category_display');
Route::get('getempcategory_data',[TestController::class,'fnGetEmployeeCategories']);
Route::post('delempcategory',[TestController::class,'fnDeleteEmpcategory']);

Route::view('addemployee','employee_register');
Route::get('getcategories',[TestController::class,'fnAddcategories']);
Route::post('addemployeedata',[TestController::class,'fnAddEmployee']);

Route::view('mailexample','mail');
Route::post('sendmail',[TestController::class,'fnSendMail']);

Route::view('payment','pay');

//////////
Route::view('techersreg','teachersregistration');
/////////
