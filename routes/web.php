<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Registration & Login Routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/registerdata', [AuthController::class, 'register'])->name('registerPost');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/loginpost', [AuthController::class, 'login'])->name('loginpost');

// User Dashboard (Only for Authenticated Users)
// Route::middleware('auth')->group(function () {
    Route::get('/webpage', [AuthController::class, 'webpage'])->name('user.dashboard');
// });
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Admin Routes (Protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AuthController::class, 'admin'])->name('admin.dashboard');
    Route::get('/admin/user/{id}/edit', [AuthController::class, 'editUser'])->name('user.edit');
    Route::post('/admin/user/{id}/update', [AuthController::class, 'updateUser'])->name('user.update');
    Route::delete('/admin/user/{id}', [AuthController::class, 'deleteUser'])->name('user.delete');
});
