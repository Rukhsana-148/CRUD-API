<?php

use Illuminate\Http\Request;
use App\HTTP\Controllers\POSTController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/posts', [PostController::class, 'index']);

Route::post('/v1/posts', [PostController::class, 'store']);
Route::get('/v1/posts', [PostController::class, 'showAll']);
Route::get('/v1/posts/{post}', [PostController::class, 'show']);
Route::post('/v1/posts/{post}', [PostController::class, 'update']);
Route::delete('/v1/posts/{post}', [PostController::class, 'destroy']);