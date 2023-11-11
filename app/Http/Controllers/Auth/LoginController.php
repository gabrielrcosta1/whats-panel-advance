<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('auth.login');
    }
}
