<?php

use App\Http\Controllers\Api\CategoryControllerApi;
use App\Http\Controllers\Api\LoginControllerApi;
use App\Http\Controllers\Api\OrderControllerApi;
use App\Http\Controllers\Api\UserControllerApi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductControllerApi;


Route::apiResource('categories', CategoryControllerApi::class);
Route::apiResource('products', ProductControllerApi::class);
Route::apiResource('users', UserControllerApi::class);
Route::post('login', [LoginControllerApi::class,'login'])->name('login');
Route::post('register', [LoginControllerApi::class,'register'])->name('register');
Route::apiResource('orders', OrderControllerApi::class);
