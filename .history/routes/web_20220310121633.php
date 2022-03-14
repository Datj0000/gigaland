<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

//Home
Route::get('/',[HomeController::class,'view_home']);
Route::get('/trang-chu',[HomeController::class,'view_home']);
Route::get('/dang-nhap',[HomeController::class,'login']);
Route::get('/dang-ki',[HomeController::class,'register']);


