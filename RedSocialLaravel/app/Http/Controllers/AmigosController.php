<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AmigosController extends Controller
{
    public function getAmigos()
    {
    	$amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
    		->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
    		->where('estado','=',1)->get();
    	return view('usuarios',['amigos'=>$amigos]);
    }
}
