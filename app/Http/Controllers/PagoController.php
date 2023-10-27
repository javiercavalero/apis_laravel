<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class pagosController extends Controller
{
    public function metodosPago()
    {
        $Pagos = Pago::all();
        return response()->json($Pagos);
    }

    public function nuevoMetodoPago(Request $request){
        $metodo = new Pago();
        $metodo->metodo = $request->input('metodo');
        $metodo->save();

        return response()->json(['respuesta' => 'Se ha registrado un nuevo metodo de pago']);
    }
    public function actualizarMetodoPago(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
}
