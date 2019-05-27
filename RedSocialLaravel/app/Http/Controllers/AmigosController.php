<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use App\Publicacion;
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

    public function listAmigos()
    {
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
        ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
        ->where('estado','=',1)->get();

        $publicaciones = Publicacion::select('users.name', 'publicaciones.id_Publicaciones', 'publicaciones.id_usuario', 'publicaciones.fecha', 'publicaciones.contenido', 'publicaciones.id_foto', 'publicaciones.id_album')
            ->join('users', 'publicaciones.id_usuario', '=', 'users.id_Usuario')
            ->get();

        return view('amigos',['listaAmigos'=>$amigos, 'publicaciones'=>$publicaciones]);
    }

    public function deleteAmigos($idAmigo)
    {
       //$amigo=Amigo::findOrFail($idAmigo);
       $amigo=Amigo::select('id_Usuario_Amigo')
       ->where('id_usuario_remitente','=', Auth::user()->id_Usuario)
       ->where('id_usuario_destinatario','=', $idAmigo)
       ->where('estado','=',1);
       $amigo->delete();

       $amigo=Amigo::select('id_Usuario_Amigo')
       ->where('id_usuario_destinatario','=', Auth::user()->id_Usuario)
       ->where('id_usuario_remitente','=', $idAmigo)
       ->where('estado','=',1);
       $amigo->delete();
       flash('Amigo borrado con exito')->error();
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
        flash('Solicitud enviada con exito')->success();
        return redirect()->action('HomeController@inicio');
    }


    public function aceptarAmistad($idUsuario)
    {

        //update estado
        $amigos=DB::table('amigos')
            ->where('id_usuario_destinatario', Auth::user()->id_Usuario)
            ->where('id_usuario_remitente', $idUsuario)
            ->update(['estado' => 1]);

        $amigo=new Amigo;
        $amigo->id_usuario_remitente=Auth::user()->id_Usuario;
        $amigo->id_usuario_destinatario=$idUsuario;
        $amigo->fecha=date('Y-m-d');
        $amigo->estado=1;
        $amigo->save();
        flash('Solicitud aceptada con exito')->success();
            return redirect("inicio");
        return response()->json($amigos);



    }

}
