<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::get('/daftar', [AuthController::class, 'register'])->name('register');