<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('product', ProductController::class);
Route::get('product/data', [ProductController::class, 'data'])->name('product.data');   

?>