<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Contacts\ContactController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contacts.index');
    Route::post('/contacts', 'send')->name('api.contacts.send');
});

Route::post('/posts/{post}/comments',
    [CommentController::class, 'store'])->middleware('auth:sanctum')->name('api.comments.store');

Route::controller(AdminLoginController::class)->group(function () {
    Route::get('/admin/login', 'index')->name('admin.login');
    Route::post('/admin/login', 'login')->name('api.admin.auth.login');
});

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

Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum')->name('api.auth.logout');
