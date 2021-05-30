<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutiController;

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

Route::get('/',[TutiController::class,'index']);
Route::get('/city/{city}',[TutiController::class,'cities']);
Route::get('/restaurant/{id}',[TutiController::class,'getRestaurantById']);
Route::post('/search',[TutiController::class,'search']);
// Route::get('/category/{category}',[TutiController::class,'category'])->name('category');
Route::get('category/{category}',[TutiController::class,'categories']);
Route::get('special-menu/{specialMenu}',[TutiController::class,'specialMenus']);