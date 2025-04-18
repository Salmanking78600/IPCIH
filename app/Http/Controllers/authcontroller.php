<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;  // Corrected import for Auth
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;  // Corrected import for Validator

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.authadmin.login');
    }

    public function signup()
    {
        return view('admin.authadmin.signup');
    }

    public function signupPost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'status' => 'nullable|in:active,inactive',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'status' => $validatedData['status'] ?? 'active',
        ]);

        return redirect()->route('signup')->with('success', 'Account created successfully!');
    }

    public function loginPost(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $user = User::where('email', $request->email)->first();

    // Check if user exists
    if ($user) {
        // Check if the password matches
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin');
        } else {
            // If the password doesn't match
            return back()->withErrors(['password' => 'The password you entered is incorrect.'])->withInput();
        }
    } else {
        // If email doesn't exist
        return back()->withErrors(['email' => 'Account does not exist.'])->withInput();
    }
}
public function logout(Request $request)
{
    Auth::logout(); // Log the user out
    $request->session()->invalidate(); // Invalidate the session
    $request->session()->regenerateToken(); // Regenerate the CSRF token
    
    // Redirect to the admin page (or a specific route like /admin)
    return redirect()->route('login'); // Assuming 'admin.dashboard' is the route name for the admin dashboard
}

}
