<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
//funcion para traer todos los usuarios
    public function usuarios()
    {
        $Usuarios = Usuario::where('activo',1)->get();

        return response()->json($Usuarios);
    }

    //funcion para crear un nuevo usuario
    public function nuevoUsuario(Request $request){
        
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->email = $request->input('email');
        $usuario->contrasena = bcrypt($request->input('contrasena'));
        $usuario->telefono = $request->input('telefono');
        $usuario->domicilio = $request->input('domicilio');
        $usuario->save();
        return "Usuario creado con éxito".$usuario;
       }
//funcion para listar un usuario segun su id
       public function usuarioId($id) {

        $usuario = Usuario::where('id', $id)->where('activo', 1)->first();
        
        if ($usuario) {
            return response()->json(['usuario' => $usuario]);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }


    public function actUsuario(Request $request, Usuario $usuario, $id){

        $usuario = Usuario::find($id);

        if ($usuario) {

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;
        $usuario->telefono = $request->telefono;
        $usuario->domicilio = $request->domicilio;
        $usuario->update();
        return $usuario;
        }else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        

    }

    public function eliminarUsuario( Usuario $usuario, $id){
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->activo = 0;
            $usuario->update();
            return "usuario eliminado";
        }else{
            return "usuario no encontrado";
        }
      }
    
}