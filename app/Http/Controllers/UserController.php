<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_index()
    {
        if (Auth::check()) return redirect('/');
        return view('layouts.login');
    }
    public function register_index()
    {
        if (Auth::check()) return redirect('/');
        return view('layouts.register');
    }
    public function logout(Request $request)
    {
        if (!Auth::check()) return redirect('/');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function login(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(
            [
                'email' => $data["email"],
                'password' => $data["password"]
            ],
            empty($data["rememberme"]) ? false:true))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        else
        {
            return back()->withErrors(
                [
                    'hata' => 'Email veya şifre hatalı.'
                ]
            );
        }
    }
    public function register(Request $request)
    {
        $validated = $request->validate(
        [
            'ad' => 'required|max:50|min:3',
            'soyad' => 'required|max:50|min:3',
            'email' => 'required|unique:users,email|max:100|email',
            'tel' => 'required|unique:users,tel|size:11',
            'password' => 'required|confirmed|min:8'
        ],
        [
            'ad.max' => 'Maksimum 50 karakter olabilir.',
            'ad.min' => 'Minimum 3 karakter olabilir',
            'soyad.max' => 'Maksimum 50 karakter olabilir.',
            'soyad.min' => 'Minimum 3 karakter olabilir',
            'email.unique' => 'Bu email adresi başkası tarafından kullanılıyor.',
            'email.max' => 'Maksimum 100 karakter olabilir',
            'email.email' => 'Email formatına uygun olmalıdır.',
            'tel.unique' => 'Bu telefon numarası başkası tarafından kullanılıyor.',
            'tel.size' => 'Telefon numarası 11 karakter olmalıdır.',
            'password.min' => 'Şifre minimum 8 karakter olabilir.',
            'password.confirmed' => 'Şifre tekrarı ile eşleşmiyor.',
        ]);

        $data = $request->all();
        Users::create([
            'name' => ucwords($data["ad"]),
            'surname' => ucwords($data["soyad"]),
            'email' => $data["email"],
            'tel' => $data["tel"],
            'password' => Hash::make($data["password"]),
        ]);
        if (Auth::attempt(['email' => $data["email"],'password' => $data["password"]])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
}
