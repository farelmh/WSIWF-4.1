<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Boarding;

class BoardingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Boarding::all();
        return view("boarding.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("boarding.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Boarding::create($request->all());
        return redirect()->route("boarding.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boarding = Boarding::findOrFail($id);
        return view("boarding.edit", compact('boarding'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $boarding = Boarding::find($id);
        $boarding->update($request->all());
        return redirect()->route("boarding.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Boarding::find($id)->delete();
        return redirect()->route("boarding.index");
    }
}
