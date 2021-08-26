<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function (Blueprint $table) {
            $table->id('numero');
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('estado');

            $table->foreign('producto_id')->references('id')->on('productos')
                ->onDelete('set null');

            $table->foreign('cliente_id')->references('id')->on('clientes')
                ->onDelete('set null');

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
        Schema::dropIfExists('poliza');
    }
}
