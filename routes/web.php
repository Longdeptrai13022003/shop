<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\Backend\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/index', [DashboardController::class,'index'])->name('dashboard.index')->middleware(AuthenticateMiddleware::class);
Route::get('admin', [AuthController::class,'index'])->name('auth.admin')->middleware(LoginMiddleware::class);
Route::post('login', [AuthController::class,'login'])->name('auth.login');
Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');

// USER
Route::get('user/index', [UserController::class,'index'])->name('user.index')->middleware(AuthenticateMiddleware::class);