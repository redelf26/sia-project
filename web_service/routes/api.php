<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// API routes can be defined here. Example:
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Your product management routes
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'viewProducts']);
Route::post('/addProd', [App\Http\Controllers\ProductsController::class, 'addProduct']);

Route::get('/', function () {
    return view('view_prod');
});
