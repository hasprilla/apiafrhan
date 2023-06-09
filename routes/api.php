<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminMenuController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => ['api'],
    'prefix' => 'v1/auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::group([
    'middleware' => ['auth:sanctum', 'api'],
    'prefix' => 'v1/auth'
], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::group([
    // 'middleware' => ['auth:sanctum'],
    'prefix' => 'v1'
], function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('menu', AdminMenuController::class);
});

    // Route::get('categories', [CategoryController::class, 'index']);
    // Route::post('categories', [CategoryController::class, 'store']);
    // Route::get('categories/{category}', [CategoryController::class, 'show']);
    // Route::put('categories/{category}', [CategoryController::class, 'update']);
    // Route::delete('categories/{category}', [CategoryController::class, 'destroy']);
