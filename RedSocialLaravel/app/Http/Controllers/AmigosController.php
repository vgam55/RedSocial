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
        if($request->ajax())
        {
          $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
         $vista=View::make('\partials\contenido\amigos1')->with('listaAmigos',$amigos);
        if($request->ajax()){
            $sections = $vista->renderSections();
            return Response::json($sections['adiskideak']); 
        }
        else 
        {
            return $vista;
        }
      //return view('inicio',['listaAmigos',$amigos]);

        }
       
        echo json_encode($amigos);
    	//return view('usuarios',['amigos'=>$amigos]);  	
       //echo $salida;
>>>>>>> 8c2bff5b7c26b84e9fc938300fdcf087205757f1
    }

    public function deleteAmigos($idAmigo)
    {
       $amigo=Amigo::findOrFail($idAmigo);
       $amigo->delete();
       return redirect()->action('HomeController@inicio');
    }

    public function getAmistad($idUsuario)
    {
        $amigo=new Amigo;
        $amigo->id_usuario_remitente=Auth::user()->id_Usuario;
        $amigo->id_usuario_destinatario=$idUsuario;
        $amigo->fecha=date('Y-m-d');
        $amigo->estado=0;
        $amigo->save();

        return redirect()->action('HomeController@inicio');
    }


    public function aceptarAmistad($idUsuario)
    {

        //update estado
        $amigos=DB::table('amigos')
            ->where('id_usuario_destinatario', Auth::user()->id_Usuario)
            ->where('id_usuario_remitente', $idUsuario)
            ->update(['estado' => 1]);

        return response()->json($amigos);


       
    }

}
