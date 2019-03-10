<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id_Comentarios');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_Usuario')->on('users')->onDelete('cascade');
            $table->text('comentario');
            $table->date('fecha');
            $table->integer('id_publicacion')->unsigned();
            $table->foreign('id_publicacion')->references('id_Publicaciones')->on('publicaciones')->onDelete('cascade');
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
        Schema::dropIfExists('comentarios');
    }
}
