<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('view-json');
});

Route::post('/products', [ProductController::class, 'store']);
Route::get('/products', [ProductController::class, 'show']);