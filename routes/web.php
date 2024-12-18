<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TruckController;

// ==========================
// Routes untuk Authentication
// ==========================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});

Route::resource('trucks', TruckController::class);
Route::get('/', function () {
    return view('home');
})->name('home');

