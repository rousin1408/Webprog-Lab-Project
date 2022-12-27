<?php

use App\Http\Controllers\AutheController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [AutheController::class, 'home'])->name('home');
// route search
Route::get('/search', [AutheController::class, 'search']);

// route product detail
Route::get('/product-detail/{id}', [AutheController::class, 'productDetail']);
Route::get('/category/{name}', [AutheController::class, 'category']);






Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AutheController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    // register
    Route::get('/register', [AutheController::class, 'register']);
    Route::post('/register-validation', [AutheController::class, 'validationregistration']);

    // login
    Route::get('/login', [AutheController::class, 'login'])->name('login');
    Route::post('/login-validation', [AutheController::class, 'validationlogin']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    // route manage product
    Route::get('/manage-product', [AutheController::class, 'manageProduct'])->name('manage-product');

    // route add new product
    Route::get('/new-product', [AutheController::class, 'newProduct']);
});

Route::middleware(['auth', 'user'])->group(function () {
    // route product detail
    Route::get('/product-detail/{id}', [AutheController::class, 'productDetail']);
    Route::get('/category/{name}', [AutheController::class, 'category']);
    Route::get('/cart', [AutheController::class, 'cart'])->name('cart');
});
