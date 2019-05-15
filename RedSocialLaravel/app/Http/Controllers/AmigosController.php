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
        $salida="<div>";
        if(!$request->ajax())
        {
          $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
        }
        
        /*foreach($amigos as $amigo)
        {
          $salida=$salida."<img class='img-fluid' src='img\\".$amigo->avatar."'/>"."<br>";
          $salida=$salida."<form class=\"form-inline\">";
          $salida=$salida."<a href=\"/getPublicaciones/$amigo->id_usuario_destinatario'\" class=\"btn btn-primary stretched-link col-6\">$amigo->name</a>";
          $salida=$salida."<button class=\"button btn btn-danger stretched-link col-6\">Borrar</button>";
          $salida=$salida."</form>";
          $salida=$salida."</div>";
        }
           
        $amigos=json_encode($amigos);*/
        echo json_encode($amigos);
    	//return view('usuarios',['amigos'=>$amigos]);  	
       //echo $salida;
    }

    public function deleteAmigos($idAmigo)
    {
       $amigo=Amigo::findOrFail($idAmigo);
       $amigo->delete();
       $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
       // return response()->json($amigos);
        return view('usuarios',['amigos'=>$amigos]);
    }

    public function getAmistad($idUsuario)
    {
        $amigo=new Amigo;
        $amigo->id_usuario_remitente=Auth::user()->id_Usuario;
        $amigo->id_usuario_destinatario=$idUsuario;
        $amigo->fecha=date('Y-m-d');
        $amigo->estado=0;
        $amigo->save();

        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
       // return response()->json($amigos);
      return view('usuarios',['amigos'=>$amigos]);
    }
}
