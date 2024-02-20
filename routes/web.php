<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * Route For Home View
 */
Route::get('/', [HomeController::class, 'index']);

/**
 * Route Prefix for Category URL with each related view
 */
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [FoodBeverageController::class, 'index']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'index']);
    Route::get('/home-care', [HomeCareController::class, 'index']);
    Route::get('/baby-kid', [BabyKidController::class, 'index']);
});

/**
 * Route Param for User view
 */
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

/**
 * Route Penjualan view
 */
Route::get('/penjualan', [PenjualanController::class, 'index']);
