<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Airline;
use App\Models\Airline_Destination;
use App\Models\Flight;
use App\Models\Plane;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Flight::paginate(10);
        return view('flights.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registro = Plane::all();
        $registro1 = Airline_Destination::all();

        return view('flights.create', compact('registro', 'registro1'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FlightRequest $request)
    {
        $airlineDes = new Airline_Destination();
        $airlineDes->destination_id = $request->destination_id;
        $airlineDes->airport_id = $request->airport_id;
        $airlineDes->airline_id = $request->airline_id;

        $airlineDes->save();

        $vuelo = new Flight();
        $vuelo->leave_date = $request->leave_date;
        $vuelo->arrive_date = $request->arrive_date;
        $vuelo->count_clients = $request->count_clients;
        $vuelo->duration = $request->duration;
        $vuelo->price = $request->price;
        $vuelo->plane_id = $request->plane_id;
        $vuelo->airline_destination_id = $airlineDes->id;
        $vuelo->save();
        dump("Generado");
        return redirect()->route('flights.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = Plane::all();
        $registro1 = Airline_Destination::all();
        
        $flight = Flight::find($id);
        // dump($flight);

        $select = Airline_Destination::find($flight->airline_destination_id);
        // dump($select);
        return view('flights.edit', compact('flight', 'select', 'registro', 'registro1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FlightRequest $request, Flight $flight)
    {
        // dump();
        // dump($id);
        $airlineDes = Airline_Destination::find($flight->airline_destination_id);
        $airlineDes->destination_id = $request->destination_id;
        $airlineDes->airport_id = $request->airport_id;
        $airlineDes->airline_id = $request->airline_id;

        $airlineDes->save();

        $flight->leave_date = $request->leave_date;
        $flight->arrive_date = $request->arrive_date;
        $flight->count_clients = $request->count_clients;
        $flight->duration = $request->duration;
        $flight->price = $request->price;
        $flight->plane_id = $request->plane_id;
        $flight->airline_destination_id = $airlineDes->id;
        $flight->save();
        dump("Actualizado");
        return redirect()->route('flights.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Flight::find($id)->delete();
        return redirect()->route('flights.index');
    }
}
