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
                1, 'Demo 1', 'descripcion', '/images/proyects/demo1.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                2, 'Demo 2', 'descripcion', '/images/proyects/demo2.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                3, 'Demo 3', 'descripcion', '/images/proyects/demo3.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                4, 'Demo 4', 'descripcion', '/images/proyects/demo4.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                5, 'Demo 5', 'descripcion', '/images/proyects/demo5.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                6, 'Demo 6', 'descripcion', '/images/proyects/demo6.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                7, 'Demo 7', 'descripcion', '/images/proyects/demo7.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ], [
                8, 'Demo 8', 'descripcion', '/images/proyects/demo8.jpeg', 150, 1, '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `bcart_proyectos` (`id`, `nombre`, `descripcion`, `imagen`,`precio`,`categories_id`, `created_at`, `updated_at`) VALUES (?,?, ?, ?, ?,?, ?, ?)', $fila);
        }
    }
}
