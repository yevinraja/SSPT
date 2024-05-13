<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerManager;


Route::get('/', function () {
    return view('welcome');
}) ->name('home');

Route::get('/login',[PlayerManager::class, 'login'] )->name('login');
Route::post('/login',[PlayerManager::class, 'loginPost'] )->name('login.post');
Route::get('/registration', [PlayerManager::class, 'registration'])->name('registration');
Route::post('/registration',[PlayerManager::class, 'registrationPost'] )->name('Registration.post');
Route::get('/logout',[PlayerManager::class, 'logout'] )->name('logout');
