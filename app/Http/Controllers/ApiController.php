<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function vuelos(){
        $flights = Flight::with('airline_destination_id')
                ->groupBy('airline__destinations.destination_id')
                ->get();

        return response()->json($flights);
    }
}
