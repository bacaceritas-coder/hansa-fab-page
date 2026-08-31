<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    /**
     * Display the monster hunting tutorial page.
     */
    public function index()
    {
        return view('tutorial');
    }
}
