<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    public function metodosPago()
    {
        $Pagos = MetodoPago::all();
        return response()->json($Pagos);
    }

    public function nuevoMetodoPago(Request $request){
        $metodo = new MetodoPago();
        $metodo->metodo = $request->input('metodo');
        $metodo->save();

        return response()->json(['respuesta' => 'Se ha registrado un nuevo metodo de pago']);
    }
    public function actualizarMetodoPago(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
}
