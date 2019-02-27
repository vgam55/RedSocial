<?php

use Illuminate\Database\Seeder;

use App\Chat;
class chatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->delete();

        $chat=new Chat();
        $chat->remitente=1;
        $chat->destinatario=2;
        $chat->mensaje="Hola";
        $chat->leido=false;
        $chat->save();

        $chat=new Chat();
        $chat->remitente=2;
        $chat->destinatario=4;
        $chat->mensaje="Hola";
        $chat->leido=false;
        $chat->save();

        $chat=new Chat();
        $chat->remitente=1;
        $chat->destinatario=3;
        $chat->mensaje="Hola";
        $chat->leido=false;
        $chat->save();

        $chat=new Chat();
        $chat->remitente=4;
        $chat->destinatario=1;
        $chat->mensaje="Hola";
        $chat->leido=false;
        $chat->save();
    }
}
