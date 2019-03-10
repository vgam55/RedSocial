<?php

use Illuminate\Database\Seeder;

use App\Foto;
class fotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos')->delete();

        $foto=new Foto;
        $foto->id_user=1;
        $foto->id_album=1;
        $foto->fecha_creacion="2019-01-01";
        $foto->ruta_foto="public/img/perfil.jpg";
        $foto->save();
    }
}
