<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceApiController extends Controller
{
    /**
     * Listar con paginación los registros
     */
    public function index()
    {
        $servicios = Service::paginate(10);
        return response()->json($servicios);
    }

    /**
     * Crear un registro
     */
    public function store(Request $request)
    {
        $registro = new Service($request->input());
        $registro->save();
        return response()->json([
            'status' => true,
            'message' => 'Servicio generado!!!'
        ], 400);
    }

    /**
     * Mostrar un registro especifico
     */
    public function show($id)
    {
        $registro = Service::find($id);
        return response()->json([
            'status' => true,
            'data' => $registro
        ]);
    }

    /**
     * Actualizar un registro
     */
    public function update(Request $request, $id)
    {
        $registro = Service::find($id);
        $registro->update($request->input());
        return response()->json([
            'status' => true,
            'message' => 'Registro de servicio actualizado'
        ], 200);
    }

    /**
     * Eliminar un registro
     */
    public function destroy($id)
    {
        $registro = Service::find($id);
        $registro->delete();
        return response()->json([
            'status' => true,
            'message' => 'Servicio eliminado'
        ], 200);
    }
}
