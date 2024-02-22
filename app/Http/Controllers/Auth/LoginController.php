<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $cr = $request->only('email', 'password');

        if (Auth::attempt($cr)) {
            $user = User::find(Auth::id());
            $request->session()->regenerate();
            if ($user->hasRole('admin')) {
                return redirect()->intended('/dashboard');
            } elseif ($user->hasRole('seller')) {
                return redirect()->intended('/seller-dashboard');
            } elseif ($user->hasRole('buyer')) {
                return redirect('/')->intended('/buyer-dashboard');
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login')->with('error', 'Email atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
