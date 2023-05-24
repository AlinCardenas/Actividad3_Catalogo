<?php

use App\Http\Controllers\AirlinesApiController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/auth/login', [AuthController::class, 'login'])->name('api.login');
Route::post('register', [AuthController::class, 'register'])->name('api.register');

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/', [AuthController::class, 'getUser'])->name('getUser');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::resource('flights', FlightsApiController::class);
Route::resource('hotels',HotelsApiController::class);
Route::resource('destinations',DestinationApiController::class);
Route::resource('airlines', AirlinesApiController::class);