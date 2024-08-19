<?php

namespace App\Http\Controllers;

use App\Models\Lifespan;
use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLifespanRequest;
use App\Http\Requests\UpdateLifespanRequest;
use Illuminate\Support\Facades\Session;


class LifespanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lifespans = Lifespan::with('animal')->get();
        return view('lifespan.index', compact('lifespans'));
    }

    public function trashed()
    {
        return view('lifespan.trashed', [
            'lifespans' => Lifespan::onlyTrashed() -> get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animals = Animal::all();
        return view('lifespan.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'years' => 'required| string',
            'status' => 'required|string',
        ]);

        Lifespan::create($request->all());

        return redirect()->route('lifespan.index')->with('success', 'Lifespan created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Lifespan $lifespan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lifespan $lifespan)
    {
        $animals = Animal::all();
        return view('lifespan.edit', compact('lifespan', 'animals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lifespan $lifespan)
    {
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'years' => 'required|string',
            'status' => 'required|string',
        ]);

        $lifespan->update($request->all());

        return redirect()->route('lifespan.index')->with('success', 'Lifespan updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lifespan = Lifespan::withTrashed() -> where('id', $id) -> first();
        $lifespan -> forceDelete();
        Session::flash('success', 'Lifespan deleted successfully!');
        return redirect() -> route('lifespan.index');
    }
    
    public function trash($id)
    {
        Lifespan::destroy($id);
        Session::flash('success', 'Lifespan trashed successfully');
        return redirect() -> route('lifespan.index');
    }

    public function restore($id)
    {
        $lifespan = Lifespan::withTrashed() -> where('id', $id) -> first();
        $lifespan -> restore();

        Session::flash('success', 'Lifespan restore Successfully!');
        return redirect() -> route('lifespan.trashed');
    }
}

