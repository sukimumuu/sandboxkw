<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [
            'desc' => 'Build Your Startup !'
        ];
        return view('welcome', $data);
    }
}
