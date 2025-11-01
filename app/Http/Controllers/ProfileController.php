<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'desc' => 'Build Your Startup !'
        ];
        return view('welcome', $data);
    }
}
