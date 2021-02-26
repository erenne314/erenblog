<?php

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

Route::get('/', 'App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register-confirm/{activation_code}', [AuthController::class, 'registerConfirm'])
    ->name('register-confirmation');
Route::match(['post', 'get'], 'login', [AuthController::class, 'login'])->name('login');
