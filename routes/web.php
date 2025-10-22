<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/daftar', [AuthController::class, 'register'])->name('register');
Route::post('/daftar', [AuthController::class, 'store'])->name('register-store');

Route::middleware('auth')->group(function () {
    Route::get('/keluar', [AuthController::class, 'logout'])->name('logout');
});