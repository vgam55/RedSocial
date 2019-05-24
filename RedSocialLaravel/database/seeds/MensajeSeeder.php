<?php

use Illuminate\Database\Seeder;

use App\Mensaje;
class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mensajes')->delete();

        $chat=new Mensaje();
        $chat->id_Remitente=1;
        $chat->id_Destinatario=2;
        $chat->mensaje="Hola";
        $chat->fecha="2019-01-01";
        //$chat->leido=false;
        $chat->save();

        $chat=new Mensaje();
        $chat->id_Remitente=2;
        $chat->id_Destinatario=4;
        $chat->mensaje="Hola";
        $chat->fecha="2019-01-01";
        //$chat->leido=false;
        $chat->save();

        $chat=new Mensaje();
        $chat->id_Remitente=1;
        $chat->id_Destinatario=3;
        $chat->mensaje="Hola";
        $chat->fecha="2019-01-01";
        //$chat->leido=false;
        $chat->save();

        $chat=new Mensaje();
        $chat->id_Remitente=4;
        $chat->id_Destinatario=1;
        $chat->mensaje="Hola";
        $chat->fecha="2019-01-01";
        //$chat->leido=false;
        $chat->save();
    }
}
