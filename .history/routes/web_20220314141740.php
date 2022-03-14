<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StatisticalController;
BuyPackageController;
//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/home',[HomeController::class,'view_home']);
Route::get('/login',[HomeController::class,'view_login']);
Route::get('/register',[HomeController::class,'view_register']);
Route::get('/profile',[HomeController::class,'view_profile']);
Route::get('/changepass',[HomeController::class,'view_changepass']);

Route::post('/login-user',[CustomerController::class,'login']);
Route::post('/register-user',[CustomerController::class,'register']);
Route::get('/logout',[CustomerController::class,'logout']);
Route::get('/login-google',[CustomerController::class,'login_google']);
Route::get('/google-callback',[CustomerController::class,'callback_google']);
Route::get('/login-facebook',[CustomerController::class,'login_facebook']);
Route::get('/facebook-callback',[CustomerController::class,'callback_facebook']);

//Admin
Route::get('/login-admin',[AdminController::class,'login_admin']);
Route::get('/logout-admin',[AdminController::class,'logout']);
Route::get('/admin',[AdminController::class,'show_admin']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/change-language/{language}',[AdminController::class,'change_language']);

Route::post('/recover-pass',[MailController::class,'recover']);
Route::post('/send-token',[MailController::class,'send_token']);
Route::post('/reset-pass',[AdminController::class,'reset_pass']);
Route::get('/change-pass',[AdminController::class,'change_pass']);
Route::post('/change-new-pass',[AdminController::class,'change_new_pass']);

Route::get('/view-profile',[AdminController::class,'view_profile']);
Route::get('/profile',[AdminController::class,'profile']);
Route::post('/update-profile',[AdminController::class,'update_profile']);

 //Customer
Route::get('/all-customer',[CustomerController::class,'view']);
Route::get('/fetchdata-customer',[CustomerController::class,'fetchdata']);
Route::get('/load-profile-user',[CustomerController::class,'load_profile']);
Route::post('/update-profile-user',[CustomerController::class,'update_profile']);
Route::post('/change-pass-user',[CustomerController::class,'change_pass']);
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

//BuyPackage
Route::get('/buy-package',[BuyPackageController::class,'buy']);

//Statistical
Route::get('/all-statistical',[StatisticalController::class,'view']);
Route::post('/filter-by-date',[StatisticalController::class,'filter_by_date']);

