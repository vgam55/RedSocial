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
       //$colegas=Amigo::all();
       $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();*/
       /* $vista=View::make('amigos')->with('listaAmigos',$amigos);
        if(!$request->ajax()){
            $sections = $vista->renderSections();
            return Response::json($sections['adiskideak']); 
        }
        else 
        {
            return $vista;
        }*/
      return view('inicio',['listaAmigos',$amigos]);
    }

    public function deleteAmigos($idAmigo)
    {
       $amigo=Amigo::findOrFail($idAmigo);
       $amigo->delete();
       $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
       return response()->json($amigos);
        //return view('usuarios',['amigos'=>$amigos]);
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
        return response()->json($amigos);
      //return view('usuarios',['amigos'=>$amigos]);
    }
}
