<?php

use App\Http\Controllers\AutheController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [AutheController::class, 'home']);
// Route::get('/{id}', [AutheController::class, 'home']);

// route product detail
Route::get('/product-detail', [AutheController::class, 'productDetail']);
Route::get('/category/{name}', [AutheController::class, 'category']);

// register
Route::get('/register', [AutheController::class, 'register']);

// login
Route::get('/login', [AutheController::class, 'login']);
Route::post('/register-validation', [AutheController::class, 'validationregistration']);
Route::post('/login-validation', [AutheController::class, 'validationlogin']);
