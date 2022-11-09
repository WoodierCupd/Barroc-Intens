<?php

use App\Http\Controllers\MailController;
use App\Models\Product;
use App\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Calendar;
use App\Models\Event;

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
    $machines = \App\Models\Product::all()->where('product_category_id', 1);
    return view('home', ['machines' => $machines]);
})->name('home');

Route::get('/products', function () {
    $machines = \App\Models\Product::all()->where('product_category_id', 1);
    return view('products', ['machines' => $machines]);
})->name('products');

Route::get('/user/{user}', function (\App\Models\User $user) {
    if (Auth::user()->role_id == 1 || Auth::user()->role_id == 4){
        return view('user')->with(compact('user'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('user');

Route::get('/user-create', function () {
    if (Auth::user()->role_id == 1 || Auth::user()->role_id == 4){
        return view('user-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('user-create');

Route::get('/maintenance-appointments-create', function () {
    if (Auth::user()->role_id == 6){
        return view('maintenance-appointments-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('maintenance-appointments-create');

Route::get('/note-create', function () {
    if (Auth::user()->role_id == 4){
        return view('note-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('note-create');

Route::get('/company-create', function () {
    if (Auth::user()->role_id == 1){
        return view('company-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('company-create');

Route::get('/invoice-create', function () {
    if (Auth::user()->role_id == 5){
        return view('invoice-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('invoice-create');

Route::get('/invoice/{invoice}', function (\App\Models\CustomInvoice $invoice) {
    if (Auth::user()->role_id == 5){
        return view('invoice')->with(compact('invoice'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('invoice');

Route::get('/company/{company}', function (\App\Models\Company $company) {
    if (Auth::user()->role_id == 1){
        return view('company')->with(compact('company'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('company');

Route::get('/product/{product}', function (\App\Models\Product $product) {
    if (Auth::user()->role_id == 1 || Auth::user()->role_id == 5){
        return view('product')->with(compact('product'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('product');

Route::get('/note/{note}', function (\App\Models\Note $note) {
    if (Auth::user()->role_id == 4){
        return view('note')->with(compact('note'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('note');

Route::get('/product-create', function () {
    if (Auth::user()->role_id == 1 || Auth::user()->role_id == 5){
        return view('product-create');
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('product-create');

Route::get('/product-index/{product}', function (\App\Models\Product $product) {
        return view('product-index')->with(compact('product'));
})->name('product-index');

Route::get('/maintenance_appointment/{maintenance_appointment}', function (\App\Models\Maintenance_appointment $maintenance_appointment) {
    if (Auth::user()->role_id == 6){
        return view('maintenance_appointment')->with(compact('maintenance_appointment'));
    } else {
        return abort(401);
    }
})->middleware(['auth', 'verified'])->name('maintenance_appointment');

Route::get('/contactform', function () {
    return view('contactform');
})->name('contactform');

Route::get('/dashboard', function () {
    switch (Auth::user()->role_id) {
        case 1:
            return redirect(route('admin'));
        case 2:
            return redirect(route('klant'));
        case 3:
            return redirect(route('purchase'));
        case 4:
            return redirect(route('sales'));
        case 5:
            return redirect(route('finance'));
        case 6:
            return redirect(route('maintenance'));
    }
//    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

// Route::view('/', 'home');

// Livewire::component('calendar', Calendar::class);

require __DIR__ . '/auth.php';

Route::get('/downloadQuotation',function (){
    $data = Product::all()->where('product_category_id', 1);
    $pdf = Pdf::loadView('pdf.quotation', compact('data'));
    return $pdf->download('offerte.pdf');
})->name('downloadQuotation');
