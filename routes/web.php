<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [FrontendController::class, 'index']); //user biasa

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard')->middleware('welcome');
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::post('upload', [PostController::class, 'uploadImage'])->name('ckeditor.upload');
});
