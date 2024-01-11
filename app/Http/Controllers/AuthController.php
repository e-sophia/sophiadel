<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful

            // Check if the authenticated user is an admin
            if (Auth::user()->role->name === 'Boutique') {
                return redirect()->route('boutique'); // Redirect to admin dashboard
            }

            if (Auth::user()->role->name === 'Clinic') {
                return redirect()->route('clinic'); // Redirect to admin dashboard
            }

            if (Auth::user()->role->name === 'Library') {
                return redirect()->route('library'); // Redirect to admin dashboard
            }

            // If not an admin, log the user out and redirect to login
            Auth::logout();
            return redirect()->route('login')->withErrors(['role' => 'You do not have admin privileges.']);
        }

        // Authentication failed
        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}