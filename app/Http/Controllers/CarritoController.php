<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carritoController extends Controller
{
    public function carrito()
    {
        echo json_encode(array("mensaje" => "Proximamente carrito de compras"));
    }

    public function nuevoCarrito(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }
    public function actCarrito(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
    public function eliminarCarrito(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }

}
