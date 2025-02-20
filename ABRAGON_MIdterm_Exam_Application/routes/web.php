<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default Laravel welcome page (optional)
Route::get('/', function () {
    return view('welcome');
});

// Route to display products
Route::get('/products', [ProductController::class, 'index']);
