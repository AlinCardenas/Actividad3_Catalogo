<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirlineRequest;
use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airline = Airline::orderByDesc('id')->paginate(12);
        return view('airline.index',compact('airline'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('airline.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AirlineRequest $request)
    {
        Airline::create($request->all());

        return redirect()->route('airline.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $airline = Airline::find($id);
        return view('airline.show')->with('airline',$airline);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $airline = Airline::find($id);
        return view('airline.edit')->with('airline',$airline);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AirlineRequest $request, $id)
    {
        $registro = Airline::find($id);
        $registro->update($request->all());
        return redirect()->route('airline.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($airline)
    {
        $airline= Airline::find($airline)->delete();
        return redirect()->route('airline.index');
    }

    public function skip($id)
    {    
        $ultimo = Airline::max('id');
        $airline=null;

        if ($ultimo==$id) {
            $airline = Airline::first();
        }else{
            $airline = Airline::where('id', '>', $id)->firstOrFail();
        }
        return redirect()->route('airline.show', compact('airline'));
    }

    public function back($id)
    {    
        $primero = Airline::min('id');
        $airline=null;

        // dump($destination = );
        if ($primero==$id) {
            $airline = Airline::latest()->get()->first();
        }else{
            $airline = Airline::where('id', '<', $id)->orderBy('id', 'desc')->first();
        }
        return redirect()->route('airline.show', compact('airline'));
    }
}
