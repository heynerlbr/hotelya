<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroHuespedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_huespedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->integer('cantidadPesonas');
            $table->string('tipohabitacion');
            $table->date('fechaIngreso');
            $table->date('fechaSalida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_huespedes');
    }
}
