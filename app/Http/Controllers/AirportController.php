<?php

namespace App\Http\Controllers;

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
        $airports = Airport::orderByDesc('id')->paginate(12);
        return view('airports.index',compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = Address::all();
        return view('airports.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //guarde el producto con la informacion del formulario
        $airports = new Airport();
        $airports->name = $request->name;
        $airports->cant = $request->cant;
        $airports->address_id = $request->address;
        $airports->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
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
        $addresses = Address::all();
        return view('airports.edit',compact('airport','addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //actualizamos aeropuerto con la informacion del formulario
        $airport = Airport::find($id);
        $airport->name = $request->name;
        $airport->cant = $request->cant;
        $airport->address_id = $request->address;
        $airport->saveOrFail();
        return redirect()->route('airports.show',compact('airport'));
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
