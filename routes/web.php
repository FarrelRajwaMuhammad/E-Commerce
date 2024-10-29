<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;



Route::get('/', function () {
    return view('auth.login');
});


Route::get('/admin/history', function () {
    return view('admin.history');
})->name('admin.history');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/product', [ProductsController::class, 'index'])->name('admin.product');
Route::post('/admin/product', [ProductsController::class, 'store'])->name('admin.product');

Route::get('/home', [ProductsController::class, 'index'])->name('home');
