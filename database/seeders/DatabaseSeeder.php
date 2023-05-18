<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Airline;
use App\Models\Airline_Destination;
use App\Models\Airport;
use App\Models\Destination;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Plane;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Crear carpeta posts donde se guardaran las imagenes
        Storage::deleteDirectory('airlines');
        Storage::makeDirectory('airlines');

        Plane::factory(45)->create();
        Address::factory(45)->create();
        Airport::factory(20)->create();
        Airline::factory(45)->create();
        Destination::factory(45)->create();
        Airline_Destination::factory(45)->create();
        Flight::factory(45)->create();
        Hotel::factory(45)->create();
    }
}
