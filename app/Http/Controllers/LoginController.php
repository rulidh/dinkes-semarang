<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $maxAttempts= 3;
    protected $decayMinutes= 1;
    
    public function index()
    {
        return view('dashboard.login.index');
    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials= $request->validate([
            'username'=> 'required',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('loginError', 'Username atau Password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->regenerate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
