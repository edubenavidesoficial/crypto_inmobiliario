<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalculadoraImportacionSeeder extends Seeder
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
                'Costo de envio', 148, '2024-02-02 22:04:01', '2024-02-02 22:04:01'
            ],
            [
                'Costo de embalaje ', 0, '2024-02-02 22:04:01', '2024-02-02 22:04:01'
            ],
            [
                'Costo de envio a almacen ', 0, '2024-02-02 22:04:01', '2024-02-02 22:04:01'
            ],
            [
                'Costo de envio al cliente', 20, '2024-02-02 22:04:01', '2024-02-02 22:04:01'
            ],
            [
                'Gastos operativos ', 30, '2024-02-02 22:04:01', '2024-02-02 22:04:01'
            ],

        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `bcart_calculadora_importaciones` ( `nombre`, `valor`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)', $fila);
        }
    }
}
