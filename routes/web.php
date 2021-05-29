<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
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

// Route::get('/',[MainController::class,'index']);
// Route::post('/search',[MainController::class,'search']);

// Route::get('/category/{genre}',[MainController::class,'category']);
// Route::get('/movies/{id}',[MainController::class,'getSingleMovie']);

Route::get('/',[MainController::class,'index']);
Route::get('/city/{city}',[MainController::class,'cities']);
Route::get('/restaurant/{id}',[MainController::class,'getRestaurantById']);
Route::post('/search',[MainController::class,'search']);
// Route::get('/category/{category}',[MainController::class,'category'])->name('category');
Route::get('category/{category}',[MainController::class,'categories']);
Route::get('special-menu/{specialMenu}',[MainController::class,'specialMenus']);