<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [UsersController::class, 'store']);
Route::get('/activate-account/{token}', [AuthController::class, 'validateAccount']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // Usuarios
    Route::get('/usuarios', [UsersController::class, 'index']);
    Route::post('/usuarios', [UsersController::class, 'store']);
    Route::get('/usuarios/{id}', [UsersController::class, 'show']);
    Route::put('/usuarios/{id}', [UsersController::class, 'update']);
    Route::delete('/usuarios/{id}', [UsersController::class, 'destroy']);

    // Blogs
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::post('/blogs', [BlogController::class, 'store']);
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    Route::put('/blogs/{id}', [BlogController::class, 'update']);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);
});



