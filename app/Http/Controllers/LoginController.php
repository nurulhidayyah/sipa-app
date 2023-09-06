<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_active == 'Anggota') {
                if (auth()->user()->status == 3) {
                    request()->session()->invalidate();
                    request()->session()->regenerateToken();
                    return back()->with('loginError', 'Anda Ditolak');
                } else {
                    $request->session()->regenerate();
                    return redirect()->intended('/setting');
                }
            } else {
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return back()->with('loginError', 'Login gagal! Belum diaktivasi');
            }
        }
        return back()->with('loginError', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
