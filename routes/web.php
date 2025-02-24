<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/storeuser', [UserController::class, 'storeUser'])->name('storeUser');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/forgotpw', [UserController::class, 'forgotPW'])->name('forgotPW');

Route::post('/handleforgotpw', [UserController::class, 'handleForgotPW'])->name('handleForgotPW');

Route::get('/reset/{token}', [UserController::class, 'reset'])->name('reset');

Route::post('/handlereset/{token}', [UserController::class, 'handleReset'])->name('handleReset');

Route::post('/sendcontact', [ContactFormController ::class, 'sendContact'])->name('sendContact');

// In routes/web.php
Route::middleware('auth')->group(function () {
    // Protected routes that require authentication
    Route::post('/logout', [UserController::class, 'destroy'])->name('logout');
});
