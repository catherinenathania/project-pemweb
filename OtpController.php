<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Untuk menggunakan session

class OtpController extends Controller
{
    /**
     * Menampilkan halaman formulir permintaan OTP.
     */
    public function showRequestForm()
    {
        return view('otp_verification');
    }

    /**
     * Menangani pengiriman email untuk mendapatkan OTP.
     * Dalam implementasi nyata, di sini Anda akan menghasilkan OTP dan mengirimkannya ke email.
     */
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email', // Pastikan email ada di tabel users
        ]);

        $email = $request->email;

        // --- Logika untuk menghasilkan dan mengirim OTP (placeholder) ---
        // Dalam aplikasi nyata:
        // 1. Hasilkan OTP acak (misal: 6 digit angka).
        // 2. Simpan OTP ini di database (misal: tabel otp_codes) bersama dengan email dan waktu kadaluarsa.
        // 3. Kirim email ke $email dengan OTP yang dihasilkan.
        //    Anda bisa menggunakan Laravel Mailables di sini.
        // Contoh sederhana (tidak aman untuk produksi):
        $otp = rand(100000, 999999);
        Session::put('otp_email', $email);
        Session::put('otp_code', $otp); // Simpan OTP di session (sementara, untuk demo)
        Session::put('otp_expires_at', now()->addMinutes(5)); // OTP kadaluarsa dalam 5 menit

        // Untuk tujuan demo, kita akan langsung redirect ke halaman verifikasi OTP
        // dan Anda bisa "membayangkan" OTP sudah terkirim ke email.
        // Pada aplikasi nyata, akan ada proses pengiriman email di sini.

        return redirect()->route('otp.verify.form')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    /**
     * Menampilkan formulir verifikasi OTP.
     */
    public function showVerifyForm()
    {
        if (!Session::has('otp_email')) {
            return redirect()->route('otp.request.form')->withErrors(['email' => 'Silakan masukkan email Anda terlebih dahulu.']);
        }
        return view('otp_verification_input'); // Kita akan membuat view ini selanjutnya
    }

    /**
     * Menangani verifikasi OTP yang dimasukkan pengguna.
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $inputOtp = $request->otp;
        $storedOtp = Session::get('otp_code');
        $storedEmail = Session::get('otp_email');
        $expiresAt = Session::get('otp_expires_at');

        if (!$storedOtp || !$storedEmail || !$expiresAt || now()->isAfter($expiresAt)) {
            return back()->withErrors(['otp' => 'Kode OTP tidak valid atau telah kadaluarsa. Silakan minta OTP baru.']);
        }

        if ($inputOtp == $storedOtp) {
            // OTP berhasil diverifikasi
            Session::forget(['otp_code', 'otp_email', 'otp_expires_at']); // Hapus OTP dari session

            // Di sini Anda bisa mengarahkan pengguna ke halaman yang dituju
            // Misalnya, ke halaman dashboard atau mengatur ulang kata sandi
            return redirect('/')->with('success', 'Verifikasi OTP berhasil!');
        } else {
            return back()->withErrors(['otp' => 'Kode OTP yang Anda masukkan salah.']);
        }
    }
}