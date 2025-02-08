<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AccountController;

Route::get('/', [FrontController::class, 'index']);
Route::get('/product-details/{product_id}', [FrontController::class, 'productDetails']);

Route::get('/auth/login', [AuthenticationController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/auth/login', [AuthenticationController::class, 'authenticate']);

Route::middleware('auth')->group(function () {

    //Admin Dashboard's Route
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //Admin Products's Routes
    Route::resource('/admin/products', ProductController::class);
    Route::get('/admin/product-images/{product_image}',[ProductController::class,'destroyProductImage'])->name('product-images.destroy');

    //Admin Category's Routes
    Route::resource('/admin/categories', CategoryController::class)->except('show');

    //Admin Setting's Routes
    Route::get('/admin/settings', [SettingController::class, 'index']);
    Route::put('/admin/settings', [SettingController::class, 'update']);

    //Admin Account Settings's Routes
    Route::get('/admin/account-settings',[AccountController::class, 'index']);
    Route::put('/admin/account-settings',[AccountController::class, 'update']);
    Route::put('/admin/account-settings/update-password',[AccountController::class, 'updatePassword']);

    //Admin Logout's Route
    Route::post('/auth/logout', [AuthenticationController::class, 'logout']);
});

Route::middleware(['auth', 'can:is-superadmin'])->group(function () {
    Route::resource('/admin/admins', AdminController::class);
    Route::post('/admin/admins/activate/{id}', [AdminController::class, 'activate'])->name('admins.activate');
    Route::post('/admin/admins/deactivate/{id}', [AdminController::class, 'deactivate'])->name('admins.deactivate');
});





