<?php


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

Route::get('/', [VistaController::class, 'showh']); 

Route::get('/login',function(){
    return redirect()->route('dashboard');
});

Route::get('hotels/users',[HotelsController::class,'showAll'])->name('hotel.showAll');

Route::get('/form', function(){
    return view('forms.register');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('enviar', [SendEmailController::class, 'envio'])->name('enviar');

    // Ruta de vuelos
    Route::resource('flights', FlightController::class);

    // Ruta de destinos
    Route::resource('destinations', DestinationsController::class);
    Route::get('destination/show-skip/{id}', [DestinationsController::class, 'skip'])->name('destinations.skip');
    Route::get('destination/show-back/{id}', [DestinationsController::class, 'back'])->name('destinations.back');

    // Ruta de AerolineasDestinos
    Route::resource('aero_des', AeroDesController::class);

    //Ruta para crud de hoteles
    Route::resource('hotels', HotelsController::class);
    Route::get('hotels/skip/{id}',[HotelsController::class,'skip'])->name('hotel.skip');
    Route::get('hotels/back/{id}',[HotelsController::class,'back'])->name('hotel.back');

    Route::resource('services', ServicesController::class);

    Route::resource('planes',PlaneController::class);

    //Rutas para aerolinieas
    
    Route::get('/airlines/create', Create::class)->name('airlines.create');
    Route::get('/airlines/index', Index::class)->name('airlines.index');
    Route::get('/airlines/edit/{slug}', Edit::class)->name('airlines.edit');
    
    //Rutas para aeropuertos
    
    Route::get('/airports/create', App\Http\Livewire\Airports\Create::class)->name('airports.create');
    Route::get('/airports', App\Http\Livewire\Airports\Index::class)->name('airports.index');
    Route::get('/airports/edit/{slug}', App\Http\Livewire\Airports\Edit::class)->name('airports.edit');

    // Rutas de vistas para usuario
    Route::get('destinos/', [DestinationsController::class, 'list'])->name('destinos.list');

    // Route::get('/flightsview', function () {
    //     return view('catalogue.flightsview');
    // });

    Route::get('/flightsview', [FlightController::class, 'list'])->name('flights.list');

    // Ruta de direcciones
    Route::resource('addresses', AddressController::class);

    Route::get('/old', function () {
        return view('olddashboard');
    });

    // Rutas de vistas para usuario

});

Route::get('/old', function () {
    return view('olddashboard');
});