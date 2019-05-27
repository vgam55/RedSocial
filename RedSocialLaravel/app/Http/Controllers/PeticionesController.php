<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notificacion;

use App\Amigo;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class PeticionesController extends Controller
{
    public function index(){
        $peticiones=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_remitente')
                ->where('id_usuario_destinatario','=',Auth::user()->id_Usuario)
                ->where('estado','=',0)->get();
                
        return view('peticiones',['peticiones'=>$peticiones]);
    }
}
