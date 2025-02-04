<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\ThemeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('themes', ThemeController::class);
Route::apiResource('social-media', SocialMediaController::class);
