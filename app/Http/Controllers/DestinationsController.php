<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinatioRequest;
use App\Models\Address;
use App\Models\Destination;

class DestinationsController extends Controller
{
    /**
     * Lista registros paginados
     */
    public function index()
    {
        $registers = Destination::paginate(10);
        
        return view('destinations.index', compact('registers'));
    }

    /**
     * Ir a la ruta del formulario de creación
     */
    public function create()
    {
        $object = new Destination();
        $listados = Address::pluck('street','id');
        return view('destinations.create', compact('object', 'listados'));
    }

    /**
     * Generar el registro
     */
    public function store(DestinatioRequest $request)
    {
        Destination::create($request->all());
        return redirect()->route('destinations.index');
    }

    /**
     * Mostrar un registro especifico
     */
    public function show(Destination $destination)
    {
        $ruta = null;
        $imgs = json_decode($destination->images);
        foreach ($imgs as $path) {
            $ruta = str_replace('public/images/', '', $path);
        }

        return view('destinations.show', compact('destination', 'ruta'));
        
    }

    /**
     * Mostrar el formulario de actualización de registro
     */
    public function edit(Destination $destination)
    {
        $listados= Address::pluck('street','id');
        return view('destinations.edit', compact('destination', 'listados'));
    }

    /**
     * Actualizar registro
     */
    public function update(DestinatioRequest $request, $id)
    {
        $registro = Destination::find($id);
        $registro->update($request->all());
        
        return redirect()->route('destinations.index');
    }

    /**
     * Eliminar registro
     */
    public function destroy($destination)
    {
        Destination::find($destination)->delete();
        return redirect()->route('destinations.index');
    }

    public function skip($id)
    {    
        $ultimo = Destination::max('id');
        $destination=null;

        if ($ultimo==$id) {
            $destination = Destination::first();
        }else{
            $destination = Destination::where('id', '>', $id)->firstOrFail();
        }
        return redirect()->route('destinations.show', compact('destination'));
    }

    public function back($id)
    {    
        $primero = Destination::min('id');
        $destination=null;

        // dump($destination = );
        if ($primero==$id) {
            $destination = Destination::latest()->get()->first();
        }else{
            $destination = Destination::where('id', '<', $id)->orderBy('id', 'desc')->first();
        }
        return redirect()->route('destinations.show', compact('destination'));
    }

    public function list(){
        $registros = Destination::paginate(15);
        return view('catalogo.index_des', compact('registros'));
    }
    
}
