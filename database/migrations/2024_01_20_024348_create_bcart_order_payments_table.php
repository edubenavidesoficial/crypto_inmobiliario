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
        Schema::create('bcart_order_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->decimal('subtotal');
            $table->decimal('shipment');
            $table->decimal('discount')->nullable();
            $table->decimal('tax');
            $table->decimal('tax_percentage');
            $table->decimal('total');
            $table->string('status');
            $table->text('voucher')->nullable();
            $table->foreign('order_id')->references('id')->on('bcart_orders');
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
        Schema::dropIfExists('bcart_pago_ordens');
    }
};
