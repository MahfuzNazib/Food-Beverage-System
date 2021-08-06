<?php

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('order', OrderController::class);
Route::get('order-details/{id}', [OrderController::class, 'order_details'])->name('order-details');
Route::get('order/data', [OrderController::class, 'data'])->name('product.data');   

Route::get('print-invoice/{id}', [OrderController::class, 'print_invoice'])->name('print-invoice');

?>