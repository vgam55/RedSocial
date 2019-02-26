<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmigos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amigos', function (Blueprint $table) {
            $table->increments('id_Usuario_Amigo');
            $table->integer('id_usuario_remitente')->unsigned();
            $table->integer('id_usuario_destinatario')->unsigned();
            $table->foreign('id_usuario_remitente')->references('id_Usuario')->on('users');
            $table->foreign('id_usuario_destinatario')->references('id_Usuario')->on('users');
            $table->date('fecha');
            $table->boolean('estado');
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
        Schema::dropIfExists('amigos');
    }
}
