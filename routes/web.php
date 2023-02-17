<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [MainController::class, 'authenticate']);
Route::post('/logout', [MainController::class, 'logout']);
Route::get('/register', [MainController::class, 'register'])->middleware('guest');
Route::post('/register', [MainController::class, 'store']);

Route::get('/home', [MainController::class, 'home'])->middleware('auth');
Route::get('/about', [MainController::class, 'about'])->middleware('auth');
Route::get('/service', [MainController::class, 'service'])->middleware('auth');
Route::get('/contact', [MainController::class, 'contact'])->middleware('auth');


