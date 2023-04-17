<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
});
