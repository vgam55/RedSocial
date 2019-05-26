<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
class AmigosController extends Controller
{
    public function getAmigos(Request $request)
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

            return redirect("inicio");

        return response()->json($amigos);


       
    }

}
