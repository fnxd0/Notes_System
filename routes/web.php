<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


// Exibir formulário de login
Route::get('/login', [AuthController::class, "login"])->name('login');

// Exibir formulário de cadastro
Route::get('/register', [AuthController::class, "register"])->name('register');


