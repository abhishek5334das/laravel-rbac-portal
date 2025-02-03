<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


 
public function register(Request $request)
{
    
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone_no' => 'required',
        'password' => 'required',  
    ]);

    try {
        
       $data = User::create([
            'name' => $request->name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',  
        ]);

     
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    } catch (\Exception $e) {
        
        return redirect()->back()->with('error', 'Registration failed. Please try again.');
    }
}
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function webpage()
    {
        return view('webpage.index');
    }
    public function admin()
    {
        $users = User::all(); // Fetch all users from the database
        return view('admin.userlist', compact('users')); // Pass users to the view
    }
    
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         return redirect()->route($user->role == 'admin' ? 'admin.dashboard' : 'user.
    //         dashboard');
    //     }

    //     return back()->withErrors(['email' => 'Invalid credentials']);
    // }


}

