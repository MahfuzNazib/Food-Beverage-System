<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'category'], function(){

    Route::resource('category', CategoryController::class);
    Route::get('/data', [CategoryController::class, 'data'])->name('category.data');   

});

?>