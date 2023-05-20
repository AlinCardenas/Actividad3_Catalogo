<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirportRequest;
use App\Models\Address;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airports = Airport::paginate(12);
        return view('airports.index',compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $object = new Airport();
        $list= Address::pluck('street','id');
        return view('airports.create', compact('list', 'object'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AirportRequest $request)
    {
       
        Airport::create($request->all());
        return redirect()->route("airports.index")->with('status', 'Aeropuerto guardado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $airport = Airport::find($id);
        return view('airports.show')->with('airport',$airport);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $airport = Airport::find($id);
        $list= Address::pluck('street','id');

        return view('airports.edit',compact('airport', 'list'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $registro = Airport::find($id);
        $registro->update($request->all());
        return redirect()->route('airports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($airports)
    {
        $airports= Airport::find($airports)->delete();
        return redirect()->route('airports.index');
    }
    public function skip($id)
    {    
        $ultimo = Airport::max('id');
        $airport=null;

        if ($ultimo==$id) {
            $airport = Airport::first();
        }else{
            $airport = Airport::where('id', '>', $id)->firstOrFail();
        }
        return redirect()->route('airports.show', compact('airport'));
    }
    public function back($id)
    {    
        $primero = Airport::min('id');
        $airport=null;

        // dump($destination = );
        if ($primero==$id) {
            $airport = Airport::latest()->get()->first();
        }else{
            $airport = Airport::where('id', '<', $id)->orderBy('id', 'desc')->first();
        }
        return redirect()->route('airports.show', compact('airport'));
    }

}
