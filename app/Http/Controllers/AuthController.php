<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'desc' => 'Masuk Startup'
        ];
        return view('auth.login', $data);
    }

    public function register()
    {
        $data = [
            'desc' => 'Daftar Startup'
        ];
        return view('auth.register', $data);
    }

    public function store(RegisterRequest $request)
    {   
        $data = $request->validated();
        try {
            User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            return redirect()->route('login')->with('success', 'Akun kamu berhasil dibuat !');
        } catch (\Throwable $th) {
            Log::error($th);
            return back()->with('error', 'Terjadi kesalahan pada server');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
