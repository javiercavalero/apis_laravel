<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        $Categorias = Categoria::all();
        return response()->json($Categorias);
    }

    public function nuevaCategoria(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();

        return response()->json(['respuesta' => 'Categoría creada con éxito']);
    }
}
