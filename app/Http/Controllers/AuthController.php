<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        // The validated data
        $validated = $request->validated();

        // Attempt login with or without 'remember me'
        if (Auth::attempt(
            ['email' => $validated['email'], 'password' => $validated['password']],
            $request->filled('remember') // Check if remember me is selected
        )) {
            // If login is successful, redirect to the intended page or dashboard
            return redirect()->intended('admin/dashboard');
        } else {
            // If login fails, return with an error message
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
