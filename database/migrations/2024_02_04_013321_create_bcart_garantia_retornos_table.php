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
        Schema::create('bcart_garantias_retornos', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_minimo');
            $table->decimal('valor_maximo');
            $table->decimal('precio_garantia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bcart_garantia_retornos');
    }
};
