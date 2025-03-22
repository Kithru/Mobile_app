<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/about', function () {return view('about');});
Route::get('/login', function () {return view('login');});
Route::get('/admin', function () {return view('admin');});
Route::get('/product', function () {return view('product');});

Route::get('/login', [LoginController::class, 'login'])->name('login'); // Show login form
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/product', [MainController::class, 'addproduct'])->name('product.addproduct');
