<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::select('*')->with(['planes', 'airline__destinations'])->get();;
        return response()->json($flights);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = new Flight($request->input());
        $registro->save();
        return response()->json([
            'status'=>true,
            'message'=>'Registro guardado',
            'data'=>$registro,
        ]);
        /* dump($registro); */

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resp =  Flight::find($id);
        return response()->json([
            'status'=>true,
            'data'=>$resp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $up = Flight::find($id);
        $up->update($request->input());
        return response()->json([
            'status'=>true,
            'message'=>'Registro actualizado',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = Flight::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
