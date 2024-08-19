<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use Illuminate\Support\Facades\Session;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('animals.index', [
            'animals' => Animal::all()
          
        ]);
    }

    
    public function trashed()
    {
        return view('animals.trashed', [
            'animals' => Animal::onlyTrashed() -> get()
        ]);
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        Animal::create($request->validated());

        Session::flash('success', 'Animal Info Addded Succesfully');
        return redirect() -> route('animals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $animal->update($request->validated());

        Session::flash('success', 'Animal Updated Successfully!');
        return redirect() -> route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $animal = Animal::withTrashed() -> where('id', $id) -> first();
        $animal -> forceDelete();
        Session::flash('success', 'Animal deleted successfully!');
        return redirect() -> route('animals.index');
    }
    
    public function trash($id)
    {
        Animal::destroy($id);
        Session::flash('success', 'Animal trashed successfully');
        return redirect() -> route('animals.index');
    }

    public function restore($id)
    {
        $animal = Animal::withTrashed() -> where('id', $id) -> first();
        $animal -> restore();

        Session::flash('success', 'Animal restore Successfully!');
        return redirect() -> route('animals.trashed');
    }
}
