<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::post('/comments/{post}',
    [CommentController::class, 'store'])->middleware('auth:sanctum')->name('api.comments.store');

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('auth.register.index');
    Route::post('register', 'signup')->name('api.auth.register');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('api.auth.login');
});

Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('forgot', 'index')->name('auth.forgot.index');
    Route::post('forgot', 'forgot')->name('api.auth.forgot');
});

Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum')->name('api.auth.logout');

