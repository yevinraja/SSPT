<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [PlayerManager::class, 'login'])->name('login');
Route::post('/login', [PlayerManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [PlayerManager::class, 'registration'])->name('registration');
Route::post('/registration', [PlayerManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [PlayerManager::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/product', ProductController::class);
