<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application homepage.
     */
    public function index()
    {
        return view('user.home');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('user.about');
    }
}