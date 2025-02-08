<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || $user->status !== 'active') {
            return back()->with('loginError','Login Gagal!');
        }
        // if ($user->status !== 'active') {
        //     return back()->with('loginError', 'Login Gagal!, Akun anda sudah dinonaktifkan!');
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->with('loginError','Login Gagal!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
