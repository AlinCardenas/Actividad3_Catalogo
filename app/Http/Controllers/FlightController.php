<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Airline;
use App\Models\Airline_Destination;
use App\Models\Airport;
use App\Models\Destination;
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

    public function flightsview()
    {

        $registers = Flight::paginate(10);
        return view('catalogue.flightsview', compact('registers'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aviones = Plane::all();
        $destinos = Destination::all();
        $aeropuertos = Airport::all();
        $aerolineas = Airline::all();

        return view('flights.create', compact('aviones', 'destinos', 'aeropuertos', 'aerolineas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FlightRequest $request)
    {
        $airlineDes = Airline_Destination::create($request->only('destination_id', 'airport_id', 'airline_id'));
        
        $valores = $request->only('leave_date','arrive_date','count_clients','duration','price','plane_id');

        $id = $airlineDes->id;

        $valores['airline_destination_id'] = $id;

        Flight::create($valores);

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
        $aviones = Plane::all();
        $destinos = Destination::all();
        $aeropuertos = Airport::all();
        $aerolineas = Airline::all();
        
        $flight = Flight::find($id);
        
        return view('flights.edit', compact('aviones', 'destinos', 'aeropuertos', 'aerolineas', 'flight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FlightRequest $request, $inden)
    {

        $airlineDes = Airline_Destination::create($request->only('destination_id', 'airport_id', 'airline_id'));
        
        $valores = $request->only('leave_date','arrive_date','count_clients','duration','price','plane_id');

        $id = $airlineDes->id;

        $valores['airline_destination_id'] = $id;

        $registro = Flight::find($inden);

        $registro->update($valores);

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

    public function list(){
        $registros = Flight::paginate(15);
        // dump($registros);
        return view('catalogue.flightsview', compact('registros'));
    }
}
