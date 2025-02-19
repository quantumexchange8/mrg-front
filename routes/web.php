<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/About', function () {
    return view('about');
})->name('about');

Route::get('/Register', function () {
    return view('Auth/register');
})->name('register');

Route::get('/Login', function () {
    return view('Auth/login');
})->name('login');