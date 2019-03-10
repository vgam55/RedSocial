<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
class AmigosController extends Controller
{
    public function getAmigos(Request $request)
    {
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
    	
        //Esta parte seria para usar con JQuery y Ajax
    	/*if($request->ajax()){
	    	$amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
    	}
    	else
    	{
    		$amigos="Error en algún lado";
    	}*/
    	
      //  return response()->json(array('datos'=>$amigos));
    	return view('usuarios',['amigos'=>$amigos]);
    }
}
