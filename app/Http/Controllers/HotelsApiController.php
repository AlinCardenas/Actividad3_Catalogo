<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::paginate(20);
        return response()->json($hotels);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = new Hotel($request->input());
        $registro->save();
        return response()->json([
            'status'=>true,
            'message' =>'Registro guardado',
            'data'=>$registro,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $resp = Hotel::find($id);
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
        $up = Hotel::find($id);
        $up->update($request->input());
        return response()->json([
            'status'=>true,
            'message' =>'Registro actualizado',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del=Hotel::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
