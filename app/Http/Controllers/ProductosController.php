<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function productos()
    {
        echo json_encode(array("mensaje" => "Proximamente lista de productos"));
    }

    public function nuevoProducto(Request $request){
        return response()->json(['respuesta' => $request->mensaje]);
    }
    public function productoId(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
    public function actualizarProd(Request $request){
        return response()->json(['respuesta' => $request->id]);
    }
    public function eliminarProd(){
        echo json_encode(array("mensaje" => "Producto eliminado"));
    }
}
