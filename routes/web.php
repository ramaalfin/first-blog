<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::middleware(['auth'])->group(function(){
    Route::get('/', function (){
        return view('pages.dashboard.index');
    })->name('dashboard')->middleware('welcome');

    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::post('upload', [PostController::class, 'uploadImage'])->name('ckeditor.upload');
});
