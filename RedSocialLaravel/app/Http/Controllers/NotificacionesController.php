<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notificacion;

use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class NotificacionesController extends Controller
{
    public function index(){
        $notificaciones = Notificacion::all();
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();

        return view('alertas',['notificaciones'=>$notificaciones, 'amigos'=>$amigos]);
    }
}
