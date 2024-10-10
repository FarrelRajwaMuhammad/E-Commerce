<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masuk');
});

Route::get('/home', function () {
    return view('profile');
});

Route::get('/menu', function () {
    return view('menu');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
