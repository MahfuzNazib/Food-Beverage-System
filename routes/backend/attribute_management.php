<?php

use App\Http\Controllers\Backend\AttributeController;
use Illuminate\Support\Facades\Route;

Route::resource('attribute', AttributeController::class);
Route::get('/data', [AttributeController::class, 'data'])->name('attribute.data');   

?>