<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/service2', function () {
//     return view('service2');
// })->name('service2');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');

// Route::get('/service',function() {
//     return view('service');
// })->name('service');

Route::get('/test',function() {
    return view('test');
});

Route::get('/test1',function() {
    return view('test1');
});

Route::get('/test2',function() {
    return view('test2');
});

Route::get('get/cart', [App\Http\Controllers\CartController::class, 'index'])->name('get.cart');
Route::post('add/cart', [App\Http\Controllers\CartController::class, 'addCart'])->name('add.cart');
Route::post('add/customer', [App\Http\Controllers\CustomerController::class, 'addCustomer'])->name('add.customer');
