<?php

use App\Models\Role;
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

Route::get('/user/{user}', function (\App\Models\User $user) {
    return view('user')->with(compact('user'));
})->middleware(['auth', 'verified'])->name('user');

Route::get('/user-create', function () {
    return view('user-create');
})->middleware(['auth', 'verified'])->name('user-create');

Route::get('/company/{company}', function (\App\Models\Company $company) {
    return view('company')->with(compact('company'));
})->middleware(['auth', 'verified'])->name('company');

Route::get('/maintenance_appointment/{maintenance_appointment}', function (\App\Models\Maintenance_appointment $maintenance_appointment) {
    return view('maintenance_appointment')->with(compact('maintenance_appointment'));
})->middleware(['auth', 'verified'])->name('maintenance_appointment');

Route::get('/contactform', function () {
    return view('contactform');
})->name('contactform');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//TODO: check if user role is admin
Route::get('/admin', function () {
    if (Auth::user()->role_id == 1) {
        return view('admin');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/klant', function () {
    if (Auth::user()->role_id == 2) {
        return view('klant');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('klant');

Route::get('/purchase', function () {
    if (Auth::user()->role_id == 3) {
        return view('purchase');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('purchase');

Route::get('/sales', function () {
    if (Auth::user()->role_id == 4) {
        return view('sales');
    } else {
        return abort(401);
    }

})->middleware(['auth', 'verified'])->name('sales');

Route::get('/finance', function () {
    if (Auth::user()->role_id == 5) {
        return view('finance');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('finance');

Route::get('/maintenance', function () {
    if (Auth::user()->role_id == 6) {
        return view('maintenance');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('maintenance');

require __DIR__ . '/auth.php';
