<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagosController extends Controller
{
    public function metodosPago()
    {
        echo json_encode(array("mensaje" => "Proximamente lista de metodos de pago"));
    }

    public function nuevoMetodoPago(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }
    public function actualizarMetodoPago(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
}
