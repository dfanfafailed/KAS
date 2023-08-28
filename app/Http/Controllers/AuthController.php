<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        $title = 'Login';
        return view('auth.index', compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'id' => ['required'],
            'password' => ['required']
        ]);

        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->route('home');
            return response()->json(['message' => 'Login berhasil', 'success' => true]);
        }

        // Jika login gagal

        // return redirect()->intended('login');
        // return back()->withErrors([
        //     'id' => 'Maaf, Password salah',
        // ]);
        return response()->json(['message' => 'Periksa kembali password Anda.', 'success' => false], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('login');
    }
}
