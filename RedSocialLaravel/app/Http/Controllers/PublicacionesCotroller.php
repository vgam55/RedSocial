<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class PublicacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('publicaciones');
    }

    public function getPublicaciones($iduser)
    {
        $publicaciones = Publicacion::select('users.name', 'publicaciones.id_Publicaciones', 'publicaciones.id_usuario', 'publicaciones.fecha', 'publicaciones.contenido', 'publicaciones.id_foto', 'publicaciones.id_album')
            ->join('users', 'publicaciones.id_usuario', '=', 'users.id_Usuario')
            ->where('publicaciones.id_usuario','=', $iduser)
            ->get();

        $listaAmigos[] = $iduser;
        
        return view('inicio',['listaAmigos'=>$listaAmigos, 'publicaciones'=>$publicaciones]);
    }

    public function create(Request $request)
    {
        //INSERTAR A LA BASE DE DATOS
        $publicacion=new Publicacion();
        $date = new DateTime();
        $publicacion->id_usuario= Auth::user()->id_Usuario;
        $publicacion->fecha=$date->format('Y-m-d');
        $publicacion->contenido=$request->input('contenido');
       	$publicacion->id_foto=1;
        $publicacion->id_album=1;


        $publicacion->save();
        flash('Publicacion subida con exito')->success();
        return redirect('inicio');

    }

     //METODO DELETE
     public function delete($idPublicacion)
     {

          Publicacion::find($idPublicacion)->delete();
          flash('Publicacion borrada con exito')->error();
          return redirect('inicio');
     }
}
