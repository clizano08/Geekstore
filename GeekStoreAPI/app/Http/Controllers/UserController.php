<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userActive()
    {

        try {
            //Listar los Productos activos
            $usuarios = User::where('active', true)->with(['rol'])->orderBy('rol_id', 'asc')->get();
            $response = $usuarios;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function userInactive()
    {

        try {
            //Listar los Productos inactivos
            $usuarios = User::where('active', false)->with(['rol'])->orderBy('rol_id', 'asc')->get();
            $response = $usuarios;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function userByID($id)
    {
        try {
            //Obtener un Producto
            $usuario = User::where('id', $id)->with(['rol'])->first();
            $response = $usuario;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
}
