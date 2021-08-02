<?php

use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;

// Route::group(['prefix' => 'sub-category'], function(){

    Route::resource('sub-category', SubCategoryController::class);
    Route::get('/data', [SubCategoryController::class, 'data'])->name('sub-category.data');   

// });

?>