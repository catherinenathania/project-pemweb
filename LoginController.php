<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth; // Untuk otentikasi pengguna

class LoginController extends Controller
{
    /**
     * Menampilkan halaman formulir login.
     */
    public function index(): View
    {
        return view('login'); // Mengembalikan view bernama 'login.blade.php'
    }

    /**
     * Menangani proses login (mengotentikasi pengguna).
     */
    public function authenticate(Request $request)
    {
        // Validasi data yang masuk dari formulir
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba otentikasi pengguna
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke halaman yang dituju setelah login berhasil
            return redirect()->intended('/'); // Redirect ke halaman utama atau halaman sebelumnya
        }

        // Jika otentikasi gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    /**
     * Menangani proses logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect ke halaman utama setelah logout
    }
}