<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/')->as('admin.')->group(function () {
    Route::middleware('auth:admin')->group(function () {

        Route::controller(PostController::class)->group(function () {
            Route::get('', 'index')->name('posts.index');
            Route::get('posts/create', 'showFormCreate')->name('posts.store');
            Route::get('posts/{post}', 'showFormUpdate')->name('posts.update');

            Route::post('posts', 'store')->name('api.posts.store');
            Route::put('posts/{post}', 'update')->name('api.posts.update');
            Route::delete('posts/{post}', 'destroy')->name('api.posts.destroy');
        });

    });

    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'login')->name('api.auth.login');
    });
});
