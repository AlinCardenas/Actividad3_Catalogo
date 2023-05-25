<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFlight;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userFlight= UserFlight::all();
        return response()->json($userFlight);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = New UserFlight($request->input());
        $registro -> save();
        return response()->json([
            'status'=>true,
            'message'=>'Registro guardado' . $registro,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resp = UserFlight::find($id);
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
        $up = UserFlight::find($id);
        $up->update($request->input());
        return response()->json([
            'status'=>true,
            'message'=>'Registro actualizado' . $up,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = UserFlight::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
