<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home'); //user biasa
Route::get('/all-posts', [FrontendController::class, 'allPosts'])->name('frontend.allPosts'); //user biasa

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard')->middleware('welcome');
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::post('upload', [PostController::class, 'uploadImage'])->name('ckeditor.upload');
});
