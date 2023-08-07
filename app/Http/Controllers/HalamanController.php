<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function indek()
    {
        return view('index');
    }

    public function utama()
    {
        return view('halaman-utama');
    }
}
