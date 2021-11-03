<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;

use App\Models\Categories;
use App\Models\Brands;


Route::get('/', function () {
    $categories = Categories::orderBy('queue')->get();
    return view('layouts.home',['categories'=>$categories]);
})->name('anasayfa');

Route::get('/giris', function ()
{
    if (Auth::check()) return redirect('/');
    return view('layouts.login');
})->name('login');

Route::get('/kayit', function ()
{
    if (Auth::check()) return redirect('/');
    return view('layouts.register');
})->name('register');

Route::get('/cikis',function (Request $request)
{
    if (!Auth::check()) return redirect('/');
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
Route::get('/urunlerimiz', function ()
{
    $categories = Categories::orderBy('queue')->get();
    $brands = Brands::orderBy('queue')->get();
    return view('layouts.urunler',['categories'=>$categories,'brands'=>$brands]);
})->name('urunlerimiz');

Route::post('/register/control',[UserController::class, 'register'])->name('register.control');
Route::post('/login/control',[UserController::class, 'login'])->name('login.control');