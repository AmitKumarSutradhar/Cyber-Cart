<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;


//Dashboard Routes
Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
