<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirDesRequest;
use App\Models\Airline_Destination;
use Illuminate\Http\Request;
use App\Http\Requests\AirDesRequest;

class AeroDesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Airline_Destination::paginate(10);
        return view('aero_des.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registro = Airline_Destination::all();

        return view('aero_des.create', compact('registro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AirDesRequest $request)
    {
        Airline_Destination::create($request->all());

        return redirect()->route('aero_des.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $registro = Airline_Destination::find($id);
        return view('aero_des.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dump($id);
        $selec = Airline_Destination::find($id);

        $registro = Airline_Destination::all();
        return view('aero_des.edit', compact('registro', 'selec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AirDesRequest $request, $id)
    {
        // dump($id);
        $registro = Airline_Destination::find($id);
        $registro->update($request->all());

        return redirect()->route('aero_des.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Airline_Destination::find($id)->delete();
        return redirect()->route('aero_des.index');
    }
}
