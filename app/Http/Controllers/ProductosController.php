<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function producto()
    {
        echo json_encode(array("mensaje" => "Proximamente lista de productos"));
    }

    public function nuevoProducto(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }
}
