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
                1, 'Residencial', '/images/categories/house.jpg', 'Incluye propiedades diseñadas para vivienda, como casas unifamiliares, apartamentos y condominios.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                2, 'Comercial', '/images/categories/hotel.jpg', 'Engloba propiedades utilizadas con fines comerciales, como oficinas, tiendas minoristas, restaurantes y hoteles.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                3, 'Industrial', '/images/categories/factory.jpg', 'Se refiere a propiedades destinadas a actividades industriales, como almacenes, fábricas y plantas de manufactura.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                4, 'Terrenos', '/images/categories/terrenos.jpg', ' Incluye parcelas de tierra sin desarrollar, que pueden ser utilizadas para diversos fines, como construcción residencial, comercial o agrícola.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                5, 'Agrícola', '/images/categories/tractor.jpg', 'Se centra en propiedades utilizadas para actividades agrícolas, como granjas, ranchos y terrenos de cultivo.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                6, 'Recreacional', '/images/categories/camping.jpg', 'Engloba propiedades destinadas al ocio y la recreación, como resorts, campamentos y propiedades frente al mar.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                7, 'Inversión', '/images/categories/apartment-building.jpg', 'Se refiere a propiedades adquiridas con el propósito de generar ingresos a través del arrendamiento o la reventa, como edificios de apartamentos y propiedades comerciales.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],

            [
                8, 'Especializada', '/images/categories/gallaudet-university.jpg', 'Incluye propiedades únicas o especializadas, como hospitales, escuelas, iglesias, cárceles y estadios.', '2023-11-26 22:04:01', '2023-11-26 22:04:01'
            ],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?)', $fila);
        }
    }
}
