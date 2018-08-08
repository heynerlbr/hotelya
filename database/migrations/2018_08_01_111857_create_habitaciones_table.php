<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('idhabitaciones');
            $table->string('numeroHabitacion'); 
            $table->integer('precio');       
            $table->enum('estado', ['libre', 'ocupado']);
            $table->enum('tipo', ['ventilador', 'aire']);        
            $table->timestamps();
            $table->integer('hoteles_idhoteles')->unsigned();
            $table->foreign('hoteles_idhoteles')->references('idhoteles')->on('hoteles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
