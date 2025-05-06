<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    Auth::routes();
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
