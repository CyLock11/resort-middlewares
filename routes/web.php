<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'home')->name('home');
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::view('/panel', 'pages.user-panel')->name('panel');

    Route::view('/casino', 'pages.casino')
        ->middleware('age')
        ->name('casino');

    Route::view('/admin', 'pages.admin-panel')
        ->middleware('admin')
        ->name('admin');
});
