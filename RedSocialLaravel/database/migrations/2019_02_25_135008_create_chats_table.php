<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id_Chats');
            $table->integer('remitente')->unsigned();
            $table->foreign('remitente')->references('id_Usuario')->on('users');
            $table->integer('destinatario')->unsigned();
            $table->foreign('destinatario')->references('id_Usuario')->on('users');
            $table->text('mensage');
            $table->date('fecha');
            $table->boolean('leido');
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
        Schema::dropIfExists('chats');
    }
}
