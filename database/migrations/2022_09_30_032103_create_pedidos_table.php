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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('negocios_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('repartidor_id');
            $table->decimal('precio_envio',8,2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('total',8, 2);
            $table->date('fecha');
            $table->text('comentario');
            $table->foreign('negocios_id')->references('id')->on('negocios');
            $table->foreign('cliente_id')->references('id')->on('usuarios');
            $table->foreign('repartidor_id')->references('id')->on('usuarios');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
