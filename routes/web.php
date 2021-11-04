<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;



Route::get('/', [HomeController::class, 'index'])->name('anasayfa');
Route::get('/giris', [UserController::class, 'login_index'])->name('login');
Route::get('/kayit', [UserController::class, 'register_index'])->name('register');
Route::get('/cikis',[UserController::class, 'logout'])->name('logout');
Route::get('/urunlerimiz', [ProductsController::class, 'index'])->name('urunlerimiz');
Route::post('/register/control',[UserController::class, 'register'])->name('register.control');
Route::post('/login/control',[UserController::class, 'login'])->name('login.control');