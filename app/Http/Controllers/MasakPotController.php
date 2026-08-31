<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasakPotController extends Controller
{
    /**
     * Display the cooking pot (Masak Pot) page.
     */
    public function index()
    {
        return view('masak-pot');
    }
}
