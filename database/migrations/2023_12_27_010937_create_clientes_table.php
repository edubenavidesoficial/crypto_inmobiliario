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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100 );
            $table->string('apellidos', 100 );
            $table->text('address_line1');
            $table->text('address_line2')->nullable();
            $table->string('zip_code', 10);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('country', 100);
            $table->string('phone_number',13);
            $table->text('instructions');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('clientes');
    }
};
