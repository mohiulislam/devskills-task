<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Handle the creation of a new user.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createUser(CreateUserRequest $request)
    {
        // The incoming request is validated automatically

        // Create the user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect to the admin dashboard with a success message
        return redirect()->route('admin.dashboard')->with('success', 'User created successfully!');
    }
}
