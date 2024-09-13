<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name('home');

Route::prefix('/product')->group(function () {
    Route::get('/dashboard', [ProductController::class, "index"])->name('productsView');
    Route::post('/store', [ProductController::class, "store"])->name('product.store');
    Route::post('/{product_id}/update', [ProductController::class, "update"])->name('product.update');
    Route::post('/{product_id}/updateStatus', [ProductController::class, "updateStatus"])->name('product.status');
    Route::get('/{product_id}/delete', [ProductController::class, "delete"])->name('product.delete');
    Route::get('/addProduct', [AddProductController::class, "index"])->name('add');
});




