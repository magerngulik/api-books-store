<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\AuthentificationController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [AuthentificationController::class, 'logout'])->middleware('auth:sanctum');
    Route::get('/getgendre', [BookController::class, 'getgendre']); 
    Route::get('/getdiscount', [BookController::class, 'getdiscount']); 
});
Route::get('/book', [BookController::class, 'index']); 

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthentificationController::class, 'login']);
    Route::post('/register', [AuthentificationController::class, 'register']);
});

Route::get('/users', [AuthentificationController::class, 'user']);

