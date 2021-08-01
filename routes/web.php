<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


// Login Route Start
Route::get('/', [LoginController::class, 'login_show'])->name('login.show');
Route::post('/do_login', [LoginController::class, 'do_login'])->name('do.login');
// Login Route End

//logout route start
Route::post('/do-logout', [LogoutController::class, 'do_logout'])->name('do.logout');
//logout route end

Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	//user management route 
    require_once 'backend/user_management.php';

	// Role Management Route 
	require_once 'backend/role_management.php';

	// Meal Management Route 
	require_once 'backend/meal_management.php';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
