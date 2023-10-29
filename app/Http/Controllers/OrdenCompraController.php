<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordenCompraController extends Controller
{
    public function nuevaOrden(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }

    public function actualizarOrden(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
}
