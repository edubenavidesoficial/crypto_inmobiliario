<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['Acerca de Pulenta', 'Contenido sobre Acerca de Pulenta...'],
            ['Programa de afiliados', 'Contenido sobre el Programa de afiliados...'],
            ['Contáctanos', 'Contenido sobre cómo contactarnos...'],
            ['Blog', 'Contenido del Blog...'],
            ['Política de devolución y reembolso', 'Contenido sobre la política de devolución y reembolso...'],
            ['Política de propiedad intelectual', 'Contenido sobre la política de propiedad intelectual...'],
            ['Política de envíos', 'Contenido sobre la política de envíos...'],
            ['Centro de ayuda y preguntas frecuentes', 'Contenido del Centro de ayuda y preguntas frecuentes...'],
            ['Protección de compras de Pulenta', 'Contenido sobre la protección de compras de Pulenta...'],
            ['Mapa del sitio', 'Contenido sobre el mapa del sitio...'],
            ['Vender en Pulenta y estado', 'Contenido sobre vender en Pulenta y estado...']
        ];
        foreach ($datos as $fila) {
            DB::insert('INSERT INTO `inf_pages` (name_page, content)  VALUES (?, ?)', $fila);
        }
    }
}
