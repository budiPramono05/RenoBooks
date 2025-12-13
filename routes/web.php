<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    return view('home');
});

Route::get('/booklist', function(){
    return view('booklist');
});

Route::get('/bookdetail', function(){
    return view('bookdetail');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/orderhistory', function(){
    return view('orderhistory');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});


