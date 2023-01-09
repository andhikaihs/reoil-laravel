<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PointController;
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

Route::get('/', [UserController::class, 'home']);

Route::get('/about', [UserController::class, 'about']);

Route::get('/transaksi', [ServiceController::class, 'transaksi'])->middleware('auth', 'admin');
Route::post('/transaksi/update/{id}', [ServiceController::class, 'update'])->middleware('auth', 'admin');

Route::get('/service', [UserController::class, 'service']);
Route::get('/service/cancel/{id}', [ServiceController::class, 'cancel'])->middleware('auth');

Route::get('/book', [ServiceController::class, 'book'])->middleware('auth');
Route::post('/book', [ServiceController::class, 'save'])->middleware('auth');

Route::get('/status', [ServiceController::class, 'status'])->middleware('auth');

Route::get('/poin', [PointController::class, 'point'])->middleware('auth');
Route::get('/poin/claim/{type}', [PointController::class, 'claim'])->middleware('auth');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('/profile/update/{id}', [UserController::class, 'update'])->middleware('auth');
Route::get('/profile/delete/{id}', [UserController::class, 'delete'])->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');