<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Destination::paginate(10);
        
        
        // foreach ($registers as $item) {
        //     $imgs = json_decode($item->images);
        //     foreach ($imgs as $path) {
        //         dump($path);
        //     }
        // }

        return view('destinations.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = new Destination();

        $filenames = [];

        foreach ($request->file('images') as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $filenames[] = $path;
        }

        $registro->name = $request->name;
        $registro->address = $request->address;
        $registro->ranking = $request->ranking;
        $registro->description = $request->description;
        $registro->languages = $request->languages;
        $registro->images = json_encode($filenames);

        $registro->save();
        
        dump("Registro generado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('destinations.show', compact('destination'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
