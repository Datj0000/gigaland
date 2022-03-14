<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);


