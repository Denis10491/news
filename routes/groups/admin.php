<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/')->as('admin.')->group(function () {
    Route::middleware('auth:admin')->group(function () {

        Route::controller(PostController::class)->group(function () {
            Route::get('', 'index')->name('posts.index');
        });

    });

    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'login')->name('api.auth.login');
    });
});
