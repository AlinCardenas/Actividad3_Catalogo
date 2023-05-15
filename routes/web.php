<?php

use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\SendEmailController;
use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

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
});

Route::post('enviar', [SendEmailController::class, 'envio'])->name('enviar');

// Ruta de destinos
Route::resource('destinations', DestinationsController::class);
Route::get('destination/show-skip/{id}', [DestinationsController::class, 'skip'])->name('destinations.skip');
Route::get('destination/show-back/{id}', [DestinationsController::class, 'back'])->name('destinations.back');

//Ruta para crud de hoteles
Route::resource('hotels', HotelsController::class);
Route::get('skip/{id}',[HotelsController::class,'skip'])->name('hotel.skip');
Route::get('back/{id}',[HotelsController::class,'back'])->name('hotel.back');

Route::resource('planes',PlaneController::class);

Route::get('/old', function () {
    return view('olddashboard');
});
