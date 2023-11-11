<?php

namespace App\Http\Controllers;

class ClientsController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('clients');
    }
}
