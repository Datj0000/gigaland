<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/trang-chu',[HomeController::class,'view_home']);
Route::get('/dang-nhap',[HomeController::class,'view_login']);
Route::get('/dang-ki',[HomeController::class,'view_register']);

Route::post('/login',[CustomerController::class,'login']);
Route::post('/register',[CustomerController::class,'register']);
Route::get('/login-google',[CustomerController::class,'login_google']);
Route::get('/google-callback',[CustomerController::class,'callback_google']);
Route::get('/login-facebook',[CustomerController::class,'login_facebook']);
Route::get('/facebook-callback',[CustomerController::class,'callback_facebook']);
