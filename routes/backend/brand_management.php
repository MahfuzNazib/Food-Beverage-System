<?php

use App\Http\Controllers\Backend\BrandController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'brand'], function(){
    Route::get("/", [BrandController::class, 'index'])->name('brand.index');  
    Route::get('/data', [BrandController::class, 'data'])->name('brand.data');
    
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/create', [BrandController::class, 'store'])->name('brand.store');
    
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    
    Route::get("/category", [BrandController::class, 'cat'])->name('brand.cat');    

});

?>