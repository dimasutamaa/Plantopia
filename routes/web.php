<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ShippingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\customer\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ShopController::class, 'index'])->name('shop');
Route::get('/products/{id}', [ShopController::class, 'show'])->name('products.show');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/cart', [CartController::class, 'index'])->name('user.cart');
    Route::get('/order', [OrderController::class, 'index'])->name('orderHistory');
    Route::get('/order/details', [OrderController::class, 'show'])->name('orderDetails');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category.list');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/admin/categories/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('product.list');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/admin/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/admin/shippings', [ShippingController::class, 'index'])->name('shipping.list');
    Route::post('/admin/shippings', [ShippingController::class, 'store'])->name('shipping.store');
    Route::get('/admin/shipping/edit/{id}', [ShippingController::class, 'edit'])->name('shipping.edit');
    Route::put('/admin/shipping/edit/{id}', [ShippingController::class, 'update'])->name('shipping.update');
    Route::delete('/admin/shippings/{id}', [ShippingController::class, 'destroy'])->name('shipping.destroy');
});
