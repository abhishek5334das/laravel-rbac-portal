<?php

use App\Http\Controllers\AuthControlller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthControlller::class, 'showRegistrationForm'])->name('register');