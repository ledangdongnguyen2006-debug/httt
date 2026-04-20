<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/books', [BookController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/orders', [OrderController::class, 'store']);