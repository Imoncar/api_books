<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [UserController::class,'register'])->name('register');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{show_user}', [UserController::class, 'show_user'])->name('users.show');

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');