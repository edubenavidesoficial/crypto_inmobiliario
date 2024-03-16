<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrecioPesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [500, 7.50, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
            [1, 15.25, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
            [1.5, 19.75, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
            [2, 24.50, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
            [2.5, 30.50, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
            [3, 36.50, '2024-02-02 22:04:01', '2024-02-02 22:04:01'],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `bcart_precios_pesos` ( `peso`, `precio`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)', $fila);
        }
    }
}
