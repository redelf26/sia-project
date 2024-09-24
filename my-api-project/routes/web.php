<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/csrf-token', function () {
    return csrf_token();
});

Route :: get('/products', [ProductsController::class, 'show']);
Route::get('/products/{id}', [ProductsController::class, 'show_id']);
Route :: post('/addProd', [ProductsController::class, 'store']);
Route :: put('/updateProd/{id}', [ProductsController::class, 'update']);

Route::get('/addProd', function () {
    return view('add_prod');
});