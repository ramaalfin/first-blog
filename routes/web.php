<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('single-post/{post}', [FrontendController::class, 'singlePost'])->name('single-post');
Route::get('category/{category}', [FrontendController::class, 'category'])->name('category');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('password/change', [ChangePasswordController::class, 'showChangeForm'])->name('password.change');
Route::post('password/change', [ChangePasswordController::class, 'change'])->name('password.change.update');

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::post('upload', [PostController::class, 'uploadImage'])->name('ckeditor.upload');
});
