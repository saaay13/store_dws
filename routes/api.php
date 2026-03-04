<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\DetalleVentaController;
use App\Http\Controllers\Api\LotController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\SellerController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories', CategoryController::class);
Route::apiResource('clients', ClientController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('sellers', SellerController::class);
Route::apiResource('lots', LotController::class);
Route::apiResource('sales', SaleController::class);
Route::apiResource('detalle-ventas', DetalleVentaController::class);
Route::apiResource('users', UserController::class);
