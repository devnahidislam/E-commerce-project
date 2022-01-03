<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\productController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\registerController;

// Home route below
// Route::get('/', function () {
//     return view('home');
// })->name('/');
Route::get('/', [productController::class, 'home'])->name('/');
// Register route below
Route::get('/register', [registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
// Login route below
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'store']);
// Logout route below
Route::get('/logout', [logoutController::class, 'store'])->name('logout');

// Product page route below
Route::get('/product', [productController::class, 'index'])->name('product');
// Add product route
Route::get('/addproduct', [productController::class, 'addProduct'])->name('addproduct')->middleware('auth');
Route::post('/addproduct', [productController::class, 'storeProduct']);
// Product details
Route::get('/details/{pid}', [productController::class, 'details'])->name('details');
// Add to cart route below
Route::get('cart', [cartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
