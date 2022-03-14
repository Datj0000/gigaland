<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use CustomerController;

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);
Route::get('/dang-nhap',[HomeController::class,'login']);
Route::get('/dang-ki',[HomeController::class,'register']);


