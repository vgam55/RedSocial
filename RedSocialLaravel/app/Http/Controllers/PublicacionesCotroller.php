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

    public function read()
    {
        $Publicaciones=Publicacion::all();
        // carga la vista y pasa los publicacioes
        return view('publicaciones.create',['publicaciones'=>$Publicaciones]);
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
        return redirect('inicio');

    }

     //METODO DELETE
     public function delete($idPublicacion)
     {

          Publicacion::find($idPublicacion)->delete();
          return redirect('inicio');
     }
}
