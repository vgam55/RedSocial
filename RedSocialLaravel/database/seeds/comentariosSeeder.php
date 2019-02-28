<?php

use Illuminate\Database\Seeder;
use App\Comentario;
class comentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->delete();

        $comentario=new Comentario();
        $comentario->id_usuario=1;
        $comentario->comentario="Esto es un comentario de prueba para ver si todo funciona bien";
        $comentario->fecha="2019-01-01";
        $comentario->id_publicacion=1;
        $comentario->save();

        $comentario=new Comentario();
        $comentario->id_usuario=2;
        $comentario->comentario="Esto es un comentario de prueba para ver si todo funciona bien";
        $comentario->fecha="2019-01-01";
        $comentario->id_publicacion=2;
        $comentario->save();

        $comentario=new Comentario();
        $comentario->id_usuario=3;
        $comentario->comentario="Esto es un comentario de prueba para ver si todo funciona bien";
        $comentario->fecha="2019-01-01";
        $comentario->id_publicacion=1;
        $comentario->save();
    }
}
