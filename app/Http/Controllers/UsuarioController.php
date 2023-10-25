<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios()
    {
        echo json_encode(array("mensaje" => "Proximamente lista de usuarios"));
    }

    public function nuevoUsuario(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }

    public function usuarioId(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }

    public function actUsuario(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }

    public function eliminarUsuario(){
        echo "usuario eliminado";  
      }
    
}