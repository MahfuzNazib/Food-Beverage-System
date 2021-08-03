<?php

use App\Http\Controllers\Backend\AttributeCategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('attribute-category', AttributeCategoryController::class);
Route::get('attribute-category/data', [AttributeCategoryController::class, 'data'])->name('attribute-category.data');   

?>