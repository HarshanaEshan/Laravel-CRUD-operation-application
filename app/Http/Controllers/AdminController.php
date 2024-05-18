<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminLogin(Request $request)
    {
        // Initial credentials
        $initialUsername = 'admin';
        $initialPassword = '123';

        // Get username and password from the request
        $username = $request->input('username');
        $password = $request->input('password');

        // Check if the provided username and password match the initial credentials
        if ($username === $initialUsername && $password === $initialPassword) {
            // Authentication successful
            return redirect() -> route('registration') -> with('message', 'Admin registered successfully.');
        } else {
            // Authentication failed
            return back() -> with('message', 'Username or Password incorrect.');
        }
    }
}
