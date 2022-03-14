<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/trang-chu',[HomeController::class,'view_home']);
Route::get('/dang-nhap',[HomeController::class,'view_login']);
Route::get('/dang-ki',[HomeController::class,'view_register']);

Route::post('/check-login',[CustomerController::class,'check_login']);
Route::post('/register',[CustomerController::class,'check_login']);
