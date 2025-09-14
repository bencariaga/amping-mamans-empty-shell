<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ExampleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Make the routes stateless.
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Simple health check
Route::get('/ping', fn() => response()->json(['pong' => true, 'time' => now()->toISOString()]));

// Versioned API example (v1)
Route::prefix('v1')->group(function () {
    Route::get('/', fn() => response()->json(['version' => 'v1', 'status' => 'ok']));

    // Example resource routes (index, show, store, update, destroy)
    // Route::apiResource('examples', ExampleController::class);

    // Auth routes (token-based) can be placed here:
    // Route::post('login', [AuthController::class, 'login']);
    // Route::post('register', [AuthController::class, 'register']);
});

// Throttle example for public endpoints (10 requests per minute)
Route::middleware('throttle:10,1')->group(function () {
    Route::get('public/info', fn() => response()->json(['app' => config('app.name'), 'env' => app()->environment()]));
});
