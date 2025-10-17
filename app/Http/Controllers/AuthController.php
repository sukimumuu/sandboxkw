<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
