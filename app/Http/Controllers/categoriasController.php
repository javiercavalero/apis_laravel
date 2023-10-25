<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function categorias()
    {
        echo json_encode(array("mensaje" => "Proximamente lista de categorias"));
    }

    public function nuevaCategoria(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }
}
