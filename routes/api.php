<?php

use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Daftar Route untuk api/product, dan memanggil function all
 */
Route::get('products', [ProductController::class, 'all']);

/**
 * Daftar Route untuk api/productcategory, dan memanggil function all
 */
Route::get('categories', [ProductCategoryController::class, 'all']);

/**
 * Daftar Route untuk api/register, dan memanggil function all
 */
Route::post('register', [UserController::class, 'register']);

/**
 * Daftar Route untuk api/login, dan memanggil function all
 */
Route::post('login', [UserController::class, 'login']);

/**
 * Untuk Update
 */
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::get('transactions', [TransactionController::class, 'all']);
    Route::post('checkout', [TransactionController::class, 'checkout']);
});