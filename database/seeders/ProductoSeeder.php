<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto = new Producto();
        $producto->nombre = "Test";
        $producto->precio = "1000";
        $producto->imagen = "image.jpg";
        $producto->descripcion = "Descripcion producto";
        $producto->habilitado  = true;
        $producto->save();
    }
}
