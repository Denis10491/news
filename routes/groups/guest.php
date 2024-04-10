<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'index')->name('register');
        Route::post('register', 'signup')->name('api.auth.register');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'login')->name('api.auth.login');
    });

    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forgot', 'index')->name('forgot');
        Route::post('forgot', 'forgot')->name('api.auth.forgot');
    });
});
