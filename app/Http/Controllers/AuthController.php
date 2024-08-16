<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {

        return view('login');

    }

    public function Login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Datele de autentificare nu sunt corecte.',
        ]);

    }

    public function showRegister() {
        
        return view('register');

    }

    public function Register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:sellers',
            'password' => 'required|string|min:6',
            'gender' => 'required|in:Male,Female'
        ]);
    
        $seller = Seller::create([
            'seller_name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'profile' => $validated['gender'],
            'is_admin' => 1
        ]);
    
        Auth::login($seller);
    
        return redirect()->route('home');
    }
}
