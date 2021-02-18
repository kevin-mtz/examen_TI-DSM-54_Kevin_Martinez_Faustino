<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cantidad');
            $table->longText('descripcion');
            $table->string('precio');
            $table->unsignedBigInteger('id_status');
            $table->string('imagen');
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_venta')->references('id')->on('venta');
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
        Schema::dropIfExists('productos');
    }
}
