<?php

use Illuminate\Database\Seeder;

use App\Publicacion;
class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicaciones')->delete();

        $publicacion=new Publicacion();
        $publicacion->id_Publicaciones=1;
        $publicacion->id_usuario=1;
        $publicacion->fecha="2019-01-01";
        $publicacion->contenido="Que viva el movimiento social para la liberación del cangrejo macho";
        $publicacion->id_foto=1;
        $publicacion->id_album=1;
        $publicacion->save();

        $publicacion=new Publicacion();
        $publicacion->id_Publicaciones=2;
        $publicacion->id_usuario=2;
        $publicacion->fecha="2019-01-01";
        $publicacion->contenido="Que viva el movimiento social para la liberación del cangrejo macho";
        $publicacion->id_foto=1;
        $publicacion->id_album=2;
        $publicacion->save();

        $publicacion=new Publicacion();
        $publicacion->id_Publicaciones=3;
        $publicacion->id_usuario=3;
        $publicacion->fecha="2019-01-01";
        $publicacion->contenido="Que viva el movimiento social para la liberación del cangrejo macho";
        $publicacion->id_foto=1;
        $publicacion->id_album=1;
        $publicacion->save();

        $publicacion=new Publicacion();
        $publicacion->id_Publicaciones=4;
        $publicacion->id_usuario=4;
        $publicacion->fecha="2019-01-01";
        $publicacion->contenido="Que viva el movimiento social para la liberación del cangrejo macho";
        $publicacion->id_foto=1;
        $publicacion->id_album=4;
        $publicacion->save();
    }
}
