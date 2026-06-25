<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Tugas05_Laravel
// Author: Aim

class AboutUsController extends Controller
{
    public function index()
    {
        // Mengembalikan view aboutus.blade.php
        return view('aboutus');
    }
}