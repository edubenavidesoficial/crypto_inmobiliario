<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                1, 'Proyecto1', 'descripcion', '/images/categories/imagen_electronica.jpg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `bcart_proyectos` (`id`, `nombre`, `descripcion`, `imagen`,`precio`,`categories_id`, `created_at`, `updated_at`) VALUES (?,?, ?, ?, ?,?, ?, ?)', $fila);
        }
    }
}
