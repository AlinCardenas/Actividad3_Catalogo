<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = plane::all();
        return view('planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $planes = plane::all('id','model');
        return view('planes.create', compact('planes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        plane::create($input);
        return redirect('planes')->with('message','Se ha creado correctamente el genero');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plane = plane::find($id);
        return view('planes.show')->with('planes',$plane);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $planes = plane::all('id','model');
        $planes = plane::findOrFail($id); 
        return view('planes.edit', compact('planes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plane = plane::findOrFail($id);
        $input=$request->all();
        $plane->update($input);
        return redirect('planes')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plane = plane::findOrFail($id);
        $plane->delete();
        return redirect('planes')->with('danger','correctamente el genero');
    }
}
