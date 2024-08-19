<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class UseranimalController extends Controller
{
    /**
     * Display a listing of the accessories for users.
     */
    public function index()
    {
        $animal = Animal::all(); // Fetch all accessories
        return view('user.animals.index', compact('animal'));
    }
}