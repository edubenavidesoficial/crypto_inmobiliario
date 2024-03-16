<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriaSeeder extends Seeder
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
                'Auriculares y accesorios ', 1, '2024-03-14 22:04:01', '2024-03-14 22:04:01'
            ],
            [
                'Accesorios de ordenador  ', 1, '2024-03-14 22:04:01', '2024-03-14 22:04:01'
            ],
            [
                'Baterías y accesorios', 1, '2024-03-14 22:04:01', '2024-03-14 22:04:01'
            ],
            [
                'Iluminación', 1, '2024-03-14 22:04:01', '2024-03-14 22:04:01'
            ],
            [
                'Audio y Radio', 1, '2024-03-14 22:04:01', '2024-03-14 22:04:01'
            ],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `sub_categorias` ( `name`, `categories_id`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)', $fila);
        }
    }
}
