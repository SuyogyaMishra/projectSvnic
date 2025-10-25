<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function test()
    {
        return "Auth Controller Test Method";
    }
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'fathersname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|integer|in:1',
            'status' => 'required|integer|in:1',
            'dob' => 'required|date',
        ]);

        $student = Student::where([
            ['date_of_birth', '=', $validatedData['dob']],
            ['email', '=', $validatedData['email']],
        ])->first();
        if (!$student) {
            return redirect()->back()->withErrors(['msg' => 'No matching student record found for the provided date of birth and email.'])->withInput();
        }
        User::create([
            'name' => $validatedData['name'],
            'fathersname' => $validatedData['fathersname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'],
            'status' => $validatedData['status'],
        ]);


        return redirect()->back()->with('msg', 'Registration successful!');
    }

    public function login(Request $request)
    {

        try {
            // Validate request

            $credentials = $request->validate([
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);

            // Attempt login
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::user()->role == 1) {
                    return redirect()->intended('/');
                }
                if (Auth::user()->role == 2) {
                    return redirect()->intended(route('admin.dashboard'));
                }
            }

            // Login failed
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ])->withInput();
        } catch (\Exception $e) {
            // Log the error
            Log::error('Login Error: ' . $e->getMessage());

            // Optionally, redirect back with a generic error
            return back()->withErrors([
                'error' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
