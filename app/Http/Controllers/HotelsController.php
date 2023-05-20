<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelsRequest;
use App\Models\Address;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Service;
use Illuminate\Http\Request;


class HotelsController extends Controller
{
    /**
     * Crear registro
     */
    public function index()
    {
        $hotels = Hotel::orderByDesc('id')->paginate(12);
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Ir al formulario de registro
     */
    public function create()
    {
        $object = new Hotel();
        $list= Service::pluck('name','id');
        $listados= Address::pluck('street','id');
        return view('hotels.create', compact('object','list','listados'));
    }

    /**
     * Guardar registro
     */
    public function store(HotelsRequest $request)
    {
        Hotel::create($request->all());
        return redirect()->route('hotels.index');
    }

    /**
     * Mostrar registro particular
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show',compact('hotel'));
    }

    /**
     * Ir al formulario de actualizar
     */

    public function edit(Hotel $hotel)
    {
        $list= Service::pluck('name','id');
        $listados= Address::pluck('street','id');
        
        return view('hotels.edit',compact('hotel','list', 'listados'));
    }

    /**
     * Actualizar registro
     */
    public function update(HotelsRequest $request, $id)
    {
        $registro = Hotel::find($id);
        $registro->update($request->all());
        return redirect()->route('hotels.index');
    }

    /**
     * Eliminar registro
     */
    public function destroy($hotel)
    {
        $hotel= Hotel::find($hotel)->delete();
        return redirect()->route('hotels.index');
    }

    /*
        Skip para show
    */
    public function skip($id)
    {    
        $ultimo = Hotel::max('id');
        $hotel=null;

        if ($ultimo==$id) {
            $hotel = Hotel::first();
        }else{
            $hotel = Hotel::where('id', '>', $id)->firstOrFail();
        }
        return redirect()->route('hotels.show', compact('hotel'));
    }

    /*
        Back para show
    */
    public function back($id)
    {    
        $primero = Hotel::min('id');
        $hotel=null;

        // dump($destination = );
        if ($primero==$id) {
            $hotel = Hotel::latest()->get()->first();
        }else{
            $hotel = Hotel::where('id', '<', $id)->orderBy('id', 'desc')->first();
        }
        return redirect()->route('hotels.show', compact('hotel'));
    }

    /*
        Mostrar listado paginado
    */
    public function showAll()
    {
        $hotels= Hotel::paginate(12);
        return view('hotels.showAll',compact('hotels'));
    }
}
