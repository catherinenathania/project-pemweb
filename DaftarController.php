<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Tambahkan ini jika belum ada untuk Session::put

class DaftarController extends Controller
{
    public function index(): View
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            $user = \App\Models\User::create([
                'name' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // *** INI PERUBAHAN UTAMA UNTUK ALUR KE OTP ***
            // Simpan email pengguna di session sebelum mengarahkan ke OTP
            Session::put('otp_email', $user->email);
            return redirect()->route('otp.request.form')->with('success', 'Akun Anda berhasil dibuat! Silakan verifikasi email Anda.');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar. Silakan coba lagi.'])->withInput();
        }
    }
}