<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinatioRequest;
use App\Models\Destination;
use Illuminate\Http\Request;

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
        return view('destinations.create');
    }

    /**
     * Generar el registro
     */
    public function store(DestinatioRequest $request)
    {

        $registro = new Destination();

        $filenames = [];

        foreach ($request->file('images') as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $filenames[] = $path;
        }

        $registro->name = $request->name;
        $registro->ranking = $request->ranking;
        $registro->description = $request->description;
        $registro->languages = $request->languages;
        $registro->images = json_encode($filenames);

        $registro->save();
        
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
        return view('destinations.edit', compact('destination'));
    }

    /**
     * Actualizar registro
     */
    public function update(DestinatioRequest $request, Destination $destination)
    {

        $filenames = [];

        foreach ($request->file('images') as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $filenames[] = $path;
        }

        $destination->name = $request->name;
        $destination->ranking = $request->ranking;
        $destination->description = $request->description;
        $destination->languages = $request->languages;
        $destination->images = json_encode($filenames);

        $destination->update();
        
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
        // dump($registros);
        return view('catalogo.index_des', compact('registros'));
    }
    
}
