<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('users');
    }
}
