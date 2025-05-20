<?php

use App\Http\Controllers\Api\CategoryControllerApi;
use App\Http\Controllers\Api\ProductControllerApi;
use App\Http\Controllers\Api\UserControllerApi;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('home',[LoginController::class,'home'])->name('home');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// User Management
Route::resource('users', UserController::class)->middleware(['auth']);
// Category management
Route::resource('categories', CategoryController::class)->middleware(['auth']);

// Product Management
Route::resource('products', ProductController::class)->middleware(['auth']);

// Orders
Route::resource('orders', OrderController::class)->middleware(['auth']);

//logout
Route::post('logout',[LoginController::class,'logout'])->name('logout');
