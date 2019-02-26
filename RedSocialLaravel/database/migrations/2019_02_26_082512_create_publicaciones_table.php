<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id_Publicaciones');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_Usuario')->on('users');
            $table->date('fecha');
            $table->text('contenido');
            $table->integer('id_foto')->unsigned();
            $table->foreign('id_foto')->references('id_Fotos')->on('fotos');
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id_Albumes')->on('albumes');
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
        Schema::dropIfExists('publicaciones');
    }
}
