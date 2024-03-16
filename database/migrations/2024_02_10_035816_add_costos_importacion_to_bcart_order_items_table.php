<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bcart_order_items', function (Blueprint $table) {
            $table->decimal('transporte')->default(0.00);
            $table->decimal('garantia_retorno')->default(0.00);
            $table->decimal('seguro')->default(0.00);
            $table->decimal('manejo_aduana')->default(0.00);
            $table->decimal('cif')->default(0.00);
            $table->decimal('cargos_totales_importacion')->default(0.00);
            $table->decimal('subtotal')->default(0.00);
            $table->decimal('precio_importacion')->default(0.00);
            $table->decimal('impuesto_aduana')->default(0.00);
            $table->decimal('costo_envio')->default(0.00);
            $table->decimal('total')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_bcart_order_items', function (Blueprint $table) {
            //
        });
    }
};
