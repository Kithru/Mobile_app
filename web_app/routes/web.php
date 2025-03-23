<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::view('/', 'welcome');


Route::controller(Controller::class)->group(function () {
    Route::get('about', 'about');
    Route::get('product', 'product');
    Route::get('customer', 'customer');
    Route::get('admin', 'admin');
});


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login');             
    Route::post('login', 'authenticate');     
    Route::get('logout', 'logout');          
});


Route::controller(MainController::class)->group(function () {
    // Route::post('addproduct', 'addproduct');              
    Route::get('searchbrand', 'searchByBrand');          
    Route::get('searchproname', 'searchByProductName');   
    Route::get('searchprocost', 'searchByProductCost');   
    Route::get('searchprosell', 'searchByProductSellPrice'); 

    // Route::get('searchmbrand', 'searchManageByBrand');    
});
