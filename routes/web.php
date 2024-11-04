<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\DataBuyerController; // Import Controller DataBuyer

// Route untuk landing page (home)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Grouping routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Route untuk pengelolaan produk
    Route::resource('/products', \App\Http\Controllers\Admin\Products\ProductController::class);
    
    // Route untuk pengelolaan data buyers
    Route::resource('data_buyers', DataBuyerController::class);
});
