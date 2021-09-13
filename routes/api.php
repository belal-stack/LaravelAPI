<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', [\App\Http\Controllers\API\ProductController::class, 'index']);
Route::post('/add-product', [\App\Http\Controllers\API\ProductController::class, 'store']);
Route::get('/edit-product/{id}', [\App\Http\Controllers\API\ProductController::class, 'edit']);
Route::put('/update-product/{id}', [\App\Http\Controllers\API\ProductController::class, 'update']);
Route::delete('/delete-product/{id}', [\App\Http\Controllers\API\ProductController::class, 'destroy']);
