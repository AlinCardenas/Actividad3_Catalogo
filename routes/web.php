<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AeroDesController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VistaController;
use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Airline\Create;
use App\Http\Livewire\Airline\Edit;
use App\Http\Livewire\Airline\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//! Ruta principal
Route::get('/', [VistaController::class, 'showh'])->name('showh'); 

//! Rutas que muestran el listado de la pagina principal
Route::get('hoteles/',[HotelsController::class,'showAll'])->name('hotel.showAll');
Route::get('destinos/', [DestinationsController::class, 'list'])->name('destinos.list');
Route::get('/flightsview', [FlightController::class, 'list'])->name('flights.list');

//! Ruta que lleva al login
Route::get('/login',function(){
    return view('auth.login');
})->name('login');

//! Ruta de formulario de información
Route::get('/form', function(){
    return view('forms.register');
});

Route::middleware([
    // 'auth:sanctum',
    // config('jetstream.auth_session'),
    // 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('showh');
        // return view('profile.show');
    })->name('dashboard');
    Route::post('enviar', [SendEmailController::class, 'envio'])->name('enviar');

    //******* Rutas resource */
    // Flights
    Route::resource('flights', FlightController::class);
    // AerolineasDestinos
    Route::resource('aero_des', AeroDesController::class);
    // Destinations
    Route::resource('destinations', DestinationsController::class);
    // Servicios
    Route::resource('services', ServicesController::class);
    // Planes
    Route::resource('planes', PlaneController::class);
    // Address
    Route::resource('addresses', AddressController::class);

    //******** Rutas skip y back */
    //! Destinos
    Route::get('destination/show-skip/{id}', [DestinationsController::class, 'skip'])->name('destinations.skip');
    Route::get('destination/show-back/{id}', [DestinationsController::class, 'back'])->name('destinations.back');
    //! Hoteles
    Route::resource('hotels', HotelsController::class);
    Route::get('hotels/skip/{id}',[HotelsController::class,'skip'])->name('hotel.skip');
    Route::get('hotels/back/{id}',[HotelsController::class,'back'])->name('hotel.back');



    //Rutas para aerolinieas
    Route::resource('airline', AirlineController::class);
    Route::get('airline/skip/{id}',[AirlineController::class,'skip'])->name('airline.skip');
    Route::get('airline/back/{id}',[AirlineController::class,'back'])->name('airline.back');

    //Rutas para aeropuertos

    Route::resource('airports', AirportController::class);
    Route::get('airports/skip/{id}',[AirportController::class,'skip'])->name('airports.skip');
    Route::get('airports/back/{id}',[AirportController::class,'back'])->name('airports.back');


});

Route::get('/old', function () {
    return view('olddashboard');
});