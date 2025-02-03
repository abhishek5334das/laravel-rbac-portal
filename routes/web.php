<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/registerdata', [AuthController::class, 'register'])->name('registerPost');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/loginpost', [AuthController::class, 'login'])->name('loginpost');
Route::get('/webpage', [AuthController::class, 'webpage'])->name('user.dashboard');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin.dashboard');