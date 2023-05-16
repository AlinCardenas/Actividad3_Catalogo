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
        $airports = Airport::all();
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
        //valide los atributos de mi formulario para validar los datos de conacto
        //define las regalas que debe de tener cada atribito
        $request->validate([
            'nombre' => 'required',
            'descripción' => 'required',
            'valoracion' => 'required',
            'destino' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $route_logo = $request->logo->store('public/img');
        

        //guarde el producto con la informacion del formulario
        $airports = new Airport();
        $airports->nombre = $request->nombre;
        $airports->descripción = $request->descripción;
        $airports->valoracion = $request->valoracion;
        $airports->destino = $request->destino;
        $airports->logo = $route_logo;
        $airports->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("marcas.index")->with('status', 'Marca guardada correctamente!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
