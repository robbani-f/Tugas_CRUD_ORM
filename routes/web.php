<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController; // Import MerchantController

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Route for showing the edit form
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Route for handling the update action
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Routes for Merchant
Route::get('/merchant', [MerchantController::class, 'index'])->name('merchant.index');
Route::get('/merchant/products/{product}/edit', [MerchantController::class, 'edit'])->name('merchant.products.edit');
Route::put('/merchant/products/{product}', [MerchantController::class, 'update'])->name('merchant.products.update');

?>
