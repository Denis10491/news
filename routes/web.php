<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('auth.register.index');
    Route::post('register', 'signup')->name('api.auth.register');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('auth.login.index');
    Route::post('login', 'login')->name('api.auth.login');
});
