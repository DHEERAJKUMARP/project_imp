<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to intended page or dashboard
            return redirect()->intended('/dashboard')->with('success', 'You are logged in!');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }
}
