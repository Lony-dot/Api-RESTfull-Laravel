<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/id', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/products',[ProductsController::class, 'index']);
    Route::post('/products',[ProductsController::class, 'store']);
    Route::put('/products/{id}',[ProductsController::class, 'update']);
    Route::get('/products/{id}',[ProductsController::class, 'show']);
    Route::delete('/products/{id}',[ProductsController::class, 'destroy']);
});
