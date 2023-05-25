<?php

use App\Http\Controllers\AirlinesApiController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationApiController;
use App\Http\Controllers\FlightsApiController;
use App\Http\Controllers\HotelsApiController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\UserApiController;
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

Route::post('/iniciar', [AuthController::class, 'login']);
Route::post('/registro', [AuthController::class, 'register']);
Route::get('getuser', [AuthController::class, 'userProfile']);
Route::get('/misvuelos/{id}', [UserApiController::class, 'details']);

Route::group(['middleware' => ['auth:sanctum']], function(){

    
});

Route::resource('flights', FlightsApiController::class);
Route::resource('hotels',HotelsApiController::class);
Route::resource('destinations',DestinationApiController::class);
Route::resource('airlines', AirlinesApiController::class);
Route::resource('usersflights', UserApiController::class);
