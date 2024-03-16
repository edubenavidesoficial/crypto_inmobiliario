<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
                1, 'Electrónica', '/images/categories/imagen_electronica.jpg', 'Descripción de Electrónica', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                2, 'Ordenadores', '/images/categories/imagen_ordenadores.jpg', 'Descripción de Ordenadores', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                3, 'Casa inteligente', '/images/categories/imagen_casa_inteligente.jpg', 'Descripción de Casa inteligente', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                4, 'Arte y Artesanía', '/images/categories/imagen_arte_artesanía.jpg', 'Descripción de Arte y Artesanía', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                5, 'Automotor', '/images/categories/imagen_automotor.jpg', 'Descripción de Automotor', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                6, 'Bebé', '/images/categories/imagen_bebe.jpg', 'Descripción de Bebé', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                7, 'Belleza y cuidado personal', '/images/categories/imagen_belleza.jpg', 'Descripción de Belleza y cuidado personal', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                8, 'Moda femenina', '/images/categories/imagen_moda_femenina.jpg', 'Descripción de Moda femenina', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                9, 'Moda de hombres', '/images/categories/imagen_moda_hombres.jpg', 'Descripción de Moda de hombres', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                10, 'Moda para niñas', '/images/categories/imagen_moda_niñas.jpg', 'Descripción de Moda para niñas', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                11, 'Moda para niños', '/images/categories/imagen_moda_niños.jpg', 'Descripción de Moda para niños', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                12, 'Salud y Hogar', '/images/categories/imagen_salud_hogar.jpg', 'Descripción de Salud y Hogar', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                13, 'Hogar y cocina', '/images/categories/imagen_hogar_cocina.jpg', 'Descripción de Hogar y cocina', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                14, 'Industrial y Científico', '/images/categories/imagen_industrial_cientifico.jpg', 'Descripción de Industrial y Científico', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                15, 'Equipaje', '/images/categories/imagen_equipaje.jpg', 'Descripción de Equipaje.jpg', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                16, 'Películas y televisión', '/images/categories/imagen_peliculas_television.jpg', 'Descripción de Películas y televisión', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                17, 'Suministros de mascotas', '/images/categories/imagen_mascotas.jpg', 'Descripción de Suministros de mascotas', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                18, 'Software', '/images/categories/imagen_software.jpg', 'Descripción de Software', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                19, 'Deportes y aire libre', '/images/categories/imagen_deportes_aire_libre.jpg', 'Descripción de Deportes y aire libre', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                20, 'Herramientas y mejoras del hogar', '/images/categories/imagen_herramientas.jpg', 'Descripción de Herramientas y mejoras del hogar', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                21, 'Juguetes y juegos', '/images/categories/imagen_juguetes_juegos.jpg', 'Descripción de Juguetes y juegos', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                22, 'Juegos de vídeo', '/images/categories/imagen_juegos_video.jpg', 'Descripción de Juegos de vídeo', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ]
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?)', $fila);
        }
    }
}
