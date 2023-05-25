<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //* Usuario "No funcional"
    public function getUserDetails(Request $request)
    {
        $accessToken = $request->header('Authorization');

        $user = User::where('access_token', $accessToken)->first();

        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }

    //* Registrar usuario
    public function register(Request $request) 
    {
        //? Recuperamos los datos en una variable para encriptar el password
        $valores = $request->all();
        $valores['password'] = bcrypt($request->password);
        //? Generamos el registro
        $user = User::create($valores);
        //? Le otorgamos un token a dicho registro
        $token = $user->createToken('myapptoken')->plainTextToken;
        //? Generamos respuesta y la retornamos
        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    //* Iniciar sesión
    public function login(Request $request) 
    {
        //? Buscamos la existencia del registro con email
        $user = User::where('email', $request->email)->first();
        //? Si el registro no se encontro con el email o el password es incorrecto para el registro encontrador retornar una respuesta de rechazo
        if(!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Las credenciales de acceso proporcionadas son incorrectas'
            ], 401);
        }
        //? Se le asigna un token para la sesión
        $token = $user->createToken('myapptoken')->plainTextToken;
        //? Generamos respuesta y la retornamos
        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    //* Cerrar sesión
    public function logout(Request $request) 
    {
        //? Eliminamos el token de sesión
        $request->user()->tokens()->delete();
        return [
            'message' => 'Sesión finalizada'
        ];
    }
}
