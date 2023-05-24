<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlinesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Airline::all();
        return response()->json($destination);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = New Airline($request->input());
        $registro->save();
        return response()->json([
            'status'=>true,
            'message'=>'Registro guardado',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resp = Airline::find($id);
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
        $up = Airline::find($id);
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
        $del = Airline::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
