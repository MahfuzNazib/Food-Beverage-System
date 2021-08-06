<?php

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('order', OrderController::class);
Route::get('order/data', [OrderController::class, 'data'])->name('product.data');   

?>