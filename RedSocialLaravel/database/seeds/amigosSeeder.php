<?php

use Illuminate\Database\Seeder;

use App\Amigo;
class amigosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amigos')->delete();

        $amigo=new Amigo();
        $amigo->id_Usuario_Remitente=1;
        $amigo->id_Usuario_Destinatario=2;
        $amigo->fecha="2019-01-01";
        $amigo->estado=1;
        $amigo->save(); 

        $amigo=new Amigo();
        $amigo->id_Usuario_Remitente=1;
        $amigo->id_Usuario_Destinatario=3;
        $amigo->fecha="2019-01-01";
        $amigo->estado=1;
        $amigo->save(); 

        $amigo=new Amigo();
        $amigo->id_Usuario_Remitente=1;
        $amigo->id_Usuario_Destinatario=4;
        $amigo->fecha="2019-01-01";
        $amigo->estado=1;
        $amigo->save(); 

        $amigo=new Amigo();
        $amigo->id_Usuario_Remitente=2;
        $amigo->id_Usuario_Destinatario=3;
        $amigo->fecha="2019-01-01";
        $amigo->estado=1;
        $amigo->save(); 

        $amigo=new Amigo();
        $amigo->id_Usuario_Remitente=2;
        $amigo->id_Usuario_Destinatario=4;
        $amigo->fecha="2019-01-01";
        $amigo->estado=1;
        $amigo->save(); 
    }
}
