<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         Model::unguard();
        $this->call(userSeeder::class);
        $this->call(albumesSeeder::class);
        $this->call(amigosSeeder::class);
        $this->call(chatsSeeder::class);
        $this->call(fotosSeeder::class);
        $this->call(publicacionesSeeder::class);
        
        $this->call(notificacionesSeeder::class);
        $this->call(comentariosSeeder::class);
        Model::reguard();
    }
}
