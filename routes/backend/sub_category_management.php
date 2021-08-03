<?php

use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('sub-category', SubCategoryController::class);
Route::get('sub-category/data', [SubCategoryController::class, 'data'])->name('sub-category.data');   

?>