<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

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
// Laravel (most useable)
Route::get('/', [PagesController::class, 'index'])->name('pages');
Route::get('/about', [PagesController::class, 'about'])->name('about');
// Laravel 8 (less usable)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Before laravel 8 
// Route::get('/products', 'ProductsController@index');