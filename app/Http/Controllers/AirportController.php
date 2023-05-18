<?php

namespace App\Http\Controllers;

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
        return view('airports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //guarde el producto con la informacion del formulario
        $airports = new Airport();
        $airports->name = $request->nombre;
        $airports->address = $request->direccion;
        $airports->cant = $request->cant;
        $airports->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("airports.index")->with('status', 'Aeropuerto guardado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $airports = Airport::find($id);
        return view('airports.show')->with('airport',$airports);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('airports.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //actualizamos aeropuerto con la informacion del formulario
        $airports = new Airport();
        $airports->name = $request->nombre;
        $airports->address = $request->direccion;
        $airports->cant = $request->cant;
        $airports->saveOrFail();
        return redirect()->route('airports.show',compact('airports'));
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
        $airports=null;

        if ($ultimo==$id) {
            $airports = Airport::first();
        }else{
            $airports = Airport::where('id', '>', $id)->firstOrFail();
        }
        return redirect()->route('airports.show', compact('airports'));
    }
    public function back($id)
    {    
        $primero = Airport::min('id');
        $airports=null;

        // dump($destination = );
        if ($primero==$id) {
            $airports = Airport::latest()->get()->first();
        }else{
            $airports = Airport::where('id', '<', $id)->orderBy('id', 'desc')->first();
        }
        return redirect()->route('airports.show', compact('airports'));
    }

}
