<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome'); // Mengembalikan view bernama 'welcome.blade.php'
    }
}