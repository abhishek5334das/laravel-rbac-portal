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
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route($user->role == 'admin' ? 'admin.dashboard' : 'user.dashboard')
                ->with('success', 'Login successful!');
        }
    
        return back()->with('error', 'Invalid credentials');
    }
    

   
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'role' => 'required',
        ]);

        try {
            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_no' => $request->phone_no,
                'role' => $request->role,
            ]);

            return redirect()->route('admin')->with('success', 'User updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update user!');
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return back()->with('success', 'User deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete user!');
        }
    }

public function logout(Request $request)
{
    Auth::logout(); // Logs out the user
    $request->session()->invalidate(); // Clears the session
    $request->session()->regenerateToken(); // Prevents CSRF attacks

    return redirect('/login')->with('success', 'Logged out successfully!');
}
}

