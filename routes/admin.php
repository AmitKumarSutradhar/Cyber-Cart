<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderControler;
use App\Http\Controllers\Backend\CategoryController;

//Admin Routes
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');

//Slider
Route::resource('slider', SliderControler::class);

//Category Route
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);
