<?php

use App\Http\Controllers\TradeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [TradeController::class, 'home'])->name('home');
Route::get('/create', [TradeController::class, 'create'])->name('create.page')->middleware('admin');
Route::post('/create', [TradeController::class, 'store'])->name('store');
Route::get('/search', [TradeController::class, 'search'])->name('search');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::post('/login', [AuthController::class, 'Login'])->name('loginToPage');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.page');
Route::post('/register', [AuthController::class, 'Register'])->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
