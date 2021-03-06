<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
require_once 'frontend/frontend.php';

// Registration 
Route::get('/registration', [RegisterController::class, 'registration'])->name('registration.show');
Route::post('/registration', [RegisterController::class, 'registration_store'])->name('registration.store');

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
	require_once 'backend/brand_management.php';
	require_once 'backend/category_management.php';
	require_once 'backend/sub_category_management.php';
	require_once 'backend/attribute_management.php';
	require_once 'backend/attribute_category_management.php';
	require_once 'backend/product_management.php';
	require_once 'backend/order_management.php';

});

