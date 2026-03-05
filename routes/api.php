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

// RUTAS PUBLICAS
Route::get('products', [ProductController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);
Route::post('users', [UserController::class, 'store']);

// RUTAS PROTEGIDAS
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('sales', SaleController::class);
    Route::apiResource('detalle-ventas', DetalleVentaController::class);
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('users', UserController::class)->except(['store']);
    Route::apiResource('sellers', SellerController::class);
    Route::apiResource('lots', LotController::class);

    Route::apiResource('products', ProductController::class)->except(['index']);
    Route::apiResource('categories', CategoryController::class)->except(['index']);
});
