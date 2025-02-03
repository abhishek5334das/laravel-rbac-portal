<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControlller extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

}
