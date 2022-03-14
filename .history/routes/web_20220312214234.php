<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AttendanceController;

//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/trang-chu',[HomeController::class,'view_home']);
Route::get('/dang-nhap',[HomeController::class,'view_login']);
Route::get('/dang-ki',[HomeController::class,'view_register']);
Route::get('/ho-so',[HomeController::class,'view_profile']);

Route::post('/login',[CustomerController::class,'login']);
Route::post('/register',[CustomerController::class,'register']);
Route::get('/logout',[CustomerController::class,'logout']);
Route::get('/login-google',[CustomerController::class,'login_google']);
Route::get('/google-callback',[CustomerController::class,'callback_google']);
Route::get('/login-facebook',[CustomerController::class,'login_facebook']);
Route::get('/facebook-callback',[CustomerController::class,'callback_facebook']);

//Admin
Route::get('/admin/login-admin',[AdminController::class,'login_admin']);
Route::get('/admin/logout-admin',[AdminController::class,'logout']);
Route::get('/admin/showadmin',[AdminController::class,'show_admin']);
Route::post('/admin/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/change-language/{language}',[AdminController::class,'change_language']);

Route::post('/admin/recover-pass',[MailController::class,'recover']);
Route::post('/admin/send-token',[MailController::class,'send_token']);
Route::post('/admin/reset-pass',[AdminController::class,'reset_pass']);
Route::get('/admin/change-pass',[AdminController::class,'change_pass']);
Route::post('/admin/change-new-pass',[AdminController::class,'change_new_pass']);

Route::get('/admin/view-profile',[AdminController::class,'view_profile']);
Route::get('/admin/profile',[AdminController::class,'profile']);
Route::post('/admin/update-profile',[AdminController::class,'update_profile']);

 //Customer
Route::get('/all-customer',[CustomerController::class,'view']);
Route::get('/fetchdata-customer',[CustomerController::class,'fetchdata']);
Route::get('/load-profile',[CustomerController::class,'load_profile']);
Route::post('/update-profile',[CustomerController::class,'update_profile']);
Route::get('/delete-customer/{customer_id}',[CustomerController::class,'delete']);

//Transaction
Route::get('/test',[HomeController::class,'test']);
Route::get('/all-transaction',[TransactionController::class,'view']);
Route::get('/fetchdata-transaction',[TransactionController::class,'fetchdata']);
Route::post('/create-transaction',[TransactionController::class,'create']);
Route::get('/view-transaction/{transaction_id}',[TransactionController::class,'view_detail']);
Route::get('/delete-transaction/{transaction_id}',[TransactionController::class,'delete']);

//Attendance
Route::get('/attendance',[AttendanceController::class,'create']);
