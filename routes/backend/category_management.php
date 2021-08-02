<?php

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'category'], function(){

    Route::resource('category', CategoryController::class);
    // Route::get("/", [CategoryController::class, 'index'])->name('category.index');
    
    Route::get('/data', [CategoryController::class, 'data'])->name('category.data');
    
    // Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    // Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    
    // Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    // Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    
    // Route::get("/category", [CategoryController::class, 'cat'])->name('category.cat');    

});

?>