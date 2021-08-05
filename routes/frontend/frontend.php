<?php

use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Frontend\CratController;
use App\Http\Controllers\Frontend\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/all-products', [WebController::class, 'all_products'])->name('all_products');
Route::get('/single-product/{slug}', [WebController::class, 'single_product'])->name('single-product');
Route::get('/contact-us', [WebController::class, 'contact_us'])->name('contact-us');

// Cart Routes
Route::get('/add-to-cart/{id}/{qnty}', [CratController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('/get-cart', [CratController::class, 'get_cart'])->name('get-cart');
Route::get('item-remove/{id}', [CratController::class, 'item_remove'])->name('item-remove');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'place_order'])->name('place-order');

// SSL Route
Route::post('/sslcommerz/success', [CheckoutController::class, 'SSLSuccess']);
Route::post('/sslcommerz/failed', [CheckoutController::class, 'SSLFailed']);
Route::post('/sslcommerz/cancel', [CheckoutController::class, 'SSLCancel']);
Route::post('/sslcommerz/ipn', [CheckoutController::class, 'SSLIpn']);
?>