<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allat->Allat::all();
        return view("crud", compact('allat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-allat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            "nev" => "required|min:3",
            "ev" => "required|min:4"
            ]
        );

        $allat = Allat::create($request->all());
        if(!is_null($allat))
            return back()->with("success", "Success!");
        else
            return back()->with("failed", "Failed to create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Allat $allat)
    {
        return view('show-allat', compact('allat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allat $allat)
    {
        return view('edit-allat', compact('allat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Allat $allat)
    {
        $request->validate(
            [
            "nev" => "required|min:3",
            "ev" => "required|min:4"
            ]
        );
        $allat = $allat->update($request->all());
        if(!is_null($allat))
            return back()->with("success", "Success!");
        else
            return back()->with("failed", "Failed to update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allat $allat)
    {
        $allat = $allat->delete();
        if(!is_null($allat))
            return back()->with("success", "Success! Article deleted");
        else
            return back()->with("failed", "Failed to delete");
    }
}
