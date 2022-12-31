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



// route search
Route::get('/search', [AutheController::class, 'search']);

// route product detail
Route::get('/', [AutheController::class, 'home'])->name('home');
Route::get('/home', [AutheController::class, 'home'])->name('home');
Route::get('/product-detail/{id}', [AutheController::class, 'productDetail']);
Route::get('/category/{name}', [AutheController::class, 'category']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AutheController::class, 'profile'])->name('profile');
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
    Route::get('/manage-product/add', [AutheController::class, 'NewProduct']);
    Route::post('/add-new-product', [AutheController::class, 'AddNewProduct']);

    Route::delete('/manage-product/delete/{product}', [AutheController::class, 'DeleteProduct']);

    Route::get('/manage-product/update/{id}', [AutheController::class, 'Update'])->name('update');
    Route::put('/manage-product/updated/{product}', [AutheController::class, 'UpdateProduct']);

    Route::get('/manage-product/search', [AutheController::class, 'manageSearch'])->name('manageSearch');
});

Route::middleware(['auth', 'user'])->group(function () {

    Route::get('/cart', [AutheController::class, 'cart'])->name('cart');
    Route::post('/cart/{product}', [AutheController::class, 'addcart']);
    Route::get('/cart/delete/{id}', [AutheController::class, 'RemoveCart']);
    Route::post('/purchase', [AutheController::class, 'purchase']);
    Route::get('/history', [AutheController::class, 'history']);
});
