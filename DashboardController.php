<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import View

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     */
    public function index(): View
    {
        // Anda bisa mengambil data dari database di sini jika diperlukan,
        // misalnya data pengguna yang sedang login untuk ditampilkan di "Halo Gabriel!"
        // Contoh:
        // $user = auth()->user();
        // return view('dashboard', compact('user'));

        return view('dashboard'); // Mengembalikan view bernama 'dashboard.blade.php'
    }
}