<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Destination;
use App\Models\Flight;
use App\Models\Hotel;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function showh(){
        $hoteles = Hotel::paginate(6);
        $flights =  Flight::paginate(6);
        $destinos = Destination::paginate(6);
        // dump($aerolineas);
        return view('users.index', compact('hoteles', 'flights', 'destinos'));
    }
}
