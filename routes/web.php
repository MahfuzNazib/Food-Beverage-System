<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\WebController;
use Illuminate\Support\Facades\Route;

// Landing page routes
Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/all-products', [WebController::class, 'all_products'])->name('all_products');
Route::get('/contact-us', [WebController::class, 'contact_us'])->name('contact-us');


// Login Route Start
Route::get('/login', [LoginController::class, 'login_show'])->name('login.show');
Route::post('/do_login', [LoginController::class, 'do_login'])->name('do.login');
// Login Route End

//logout route start
Route::post('/do-logout', [LogoutController::class, 'do_logout'])->name('do.logout');


Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    require_once 'backend/user_management.php';
	require_once 'backend/role_management.php';
	require_once 'backend/meal_management.php';
	require_once 'backend/brand_management.php';
	require_once 'backend/category_management.php';

	// Route::get("/brand", [BrandController::class, 'index'])->name('brand.index'); 

});

