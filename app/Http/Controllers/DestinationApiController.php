<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Destination::all()->with('addresses')->get();
        return response()->json($destination);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = New Destination($request->input());
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
        $resp = Destination::find($id);
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
        $up = Destination::find($id);
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
        $del = Destination::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
