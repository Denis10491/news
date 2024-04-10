<?php

use App\Http\Controllers\Auth\LogoutController;
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

Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum')->name('api.auth.logout');
