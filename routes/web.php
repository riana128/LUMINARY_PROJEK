<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\ProductController;

// Route untuk landing page (home)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');
