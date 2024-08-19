<?php

namespace App\Http\Controllers;

use App\Models\Lifespan;
use Illuminate\Http\Request;

class UserLifespanController extends Controller
{
    /**
     * Display a listing of the accessories for users.
     */
    public function index()
    {
        $lifespan = Lifespan::all(); // Fetch all accessories
        return view('user.lifespan.index', compact('lifespan'));
    }
}