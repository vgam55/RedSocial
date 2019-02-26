<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('id_Fotos');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_Usuario')->on('users');
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id_Albumes')->on('albumes');
            $table->date('fecha_creacion');
            $table->string('ruta_foto',190);
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
        Schema::dropIfExists('fotos');
    }
}
