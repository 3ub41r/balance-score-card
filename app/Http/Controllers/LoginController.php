<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // return $request->all();
        // Login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // So sekarang dah boleh login. Nak kawal je apa yang boleh dicapai
            // Kena guna middleware

            $user = Auth::user();

            if ($user->is_admin) {
                return redirect()->intended(route('admin-dashboard'));
            }

            // TODO: Redirect user based on his/her role.
            return redirect()->intended(route('dashboard'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
