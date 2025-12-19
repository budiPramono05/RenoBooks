<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

/* HOME */
Route::get('/', [HomeController::class, 'index'])->name('home');

/* BOOK */
Route::get('/books', [BookController::class, 'index'])->name('books.list');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.detail');

/* AUTH */
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->middleware('auth');


/* CART */
Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->middleware('auth')
    ->name('cart.add');

Route::get('/checkout', [CartController::class, 'checkout'])
    ->middleware('auth')
    ->name('checkout');

Route::post('/order/confirm', [OrderController::class, 'store'])
    ->middleware('auth')
    ->name('order.store');

Route::get('/orderhistory', [OrderController::class, 'index'])
    ->middleware('auth')
    ->name('order.history');
