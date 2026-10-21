<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::updateOrCreate(
            ['nombre' => 'Chipa'],
            ['precio' => 5000]
        );

        Producto::updateOrCreate(
            ['nombre' => 'Mbejú'],
            ['precio' => 7000]
        );

        Producto::updateOrCreate(
            ['nombre' => 'Cocido'],
            ['precio' => 3000]
        );

        Producto::updateOrCreate(
            ['nombre' => 'Sopa paraguaya'],
            ['precio' => 10000]
        );

        Producto::updateOrCreate(
            ['nombre' => 'Empanada'],
            ['precio' => 5000]
        );
    }
}
