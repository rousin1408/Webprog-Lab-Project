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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', [AutheController::class, 'regis']);
Route::get('/register', [AutheController::class, 'register']);
Route::get('/login', [AutheController::class, 'login']);
Route::post('/register-validation', [AutheController::class, 'validationregistration']);
Route::post('/login-validation', [AutheController::class, 'validationlogin']);
// Route::post('/login', [LoginController::class, 'login']);
