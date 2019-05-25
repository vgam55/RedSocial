<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id_Mensaje');
            $table->integer('id_Remitente')->unsigned();
            $table->integer('id_Destinatario')->unsigned();
            $table->text('mensaje');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_Remitente')->references('id_Usuario')->on('users')->onDelete('cascade');
            $table->foreign('id_Destinatario')->references('id_Usuario')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
