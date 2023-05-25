<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::paginate(12);
        return response()->json([$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = New User($request->input());
        $registro -> save();
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
        $resp =User::find($id);
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
        $up = User::find($id);
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
        $del = User::find($id);
        $del->delete();
        return response()->json([
            'status'=>true,
            'message' =>'Registro eliminado',
        ]);
    }
}
