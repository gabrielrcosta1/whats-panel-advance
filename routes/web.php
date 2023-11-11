<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{ClientsController, DashboardController, UserController};
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/clientes', [ClientsController::class, 'index'])->name('clients');
Route::get('/usuarios', [UserController::class, 'index'])->name('users');
