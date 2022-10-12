<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//TODO: check if user role is admin
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/klant', function () {
    return view('klant');
})->middleware(['auth', 'verified'])->name('klant');

Route::get('/purchase', function () {
    return view('purchase');
})->middleware(['auth', 'verified'])->name('purchase');

Route::get('/sales', function () {
    return view('sales');
})->middleware(['auth', 'verified'])->name('sales');

Route::get('/finance', function () {
    return view('finance');
})->middleware(['auth', 'verified'])->name('finance');

Route::get('/maintenance', function () {
    return view('maintenance');
})->middleware(['auth', 'verified'])->name('maintenance');

require __DIR__.'/auth.php';
