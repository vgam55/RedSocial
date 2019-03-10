<?php

use Illuminate\Database\Seeder;

use App\Notificacion;
class notificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notificaciones')->delete();

        $notificacion= new Notificacion();
        $notificacion->id_Pub=1;
        $notificacion->fecha="2019-01-01";
        $notificacion->leido=false;

        $notificacion= new Notificacion();
        $notificacion->id_Pub=1;
        $notificacion->fecha="2019-01-01";
        $notificacion->leido=false;

        $notificacion= new Notificacion();
        $notificacion->id_Pub=1;
        $notificacion->fecha="2019-01-01";
        $notificacion->leido=false;
    }
}
