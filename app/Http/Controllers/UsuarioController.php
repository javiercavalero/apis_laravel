<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios()
    {
        $Usuarios = Usuario::all();
        return response()->json($Usuarios);
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