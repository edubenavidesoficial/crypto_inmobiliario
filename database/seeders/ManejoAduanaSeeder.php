<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManejoAduanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [0, 100, 3.75, '2024-02-07 22:04:01', '2024-02-07 22:04:01'],
            [100, 200, 5.95, '2024-02-07 22:04:01', '2024-02-07 22:04:01'],
            [201, 1000, 9.50, '2024-02-07 22:04:01', '2024-02-07 22:04:01'],
            [1001, 2000, 14.50, '2024-02-07 22:04:01', '2024-02-07 22:04:01'],
            [2001, 99999, 165, '2024-02-07 22:04:01', '2024-02-07 22:04:01'],
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `bcart_manejos_aduanas` ( `valor_minimo`, `valor_maximo`,`precio`, `created_at`, `updated_at`) VALUES (?,?,?,?,?)', $fila);
        }
    }
}
