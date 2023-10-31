<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function productos()
    {
        $Productos = Producto::all();
        return response()->json($Productos);
    }

    public function nuevoProducto(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria = $request->input('categoria');
        $producto->save();
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
