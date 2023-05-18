<?php

use App\Http\Controllers\DestinationApiController;
use App\Http\Controllers\FlightsApiController;
use App\Http\Controllers\HotelsApiController;
use App\Http\Controllers\HotelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('flights', FlightsApiController::class);
Route::resource('Hotels',HotelsApiController::class);
Route::resource('destination',DestinationApiController::class);