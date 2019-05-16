<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Publicacion;
use App\Foto;

//SELECT * FROM publicaciones JOIN fotos ON publicaciones.id_foto=fotos.id_Fotos WHERE publicaciones.id_usuario=1 

class PublicacionesCotroller extends Controller
{
    public function getPublicaciones ($idUser)
    {
    	//$publicaciones=Publicacion::where('id_usuario',"=",$idUser)->get();
    	//$fotos=Foto::where('id_Fotos','=',1);
      	$publicaciones=DB::table('publicaciones')
       				   ->join('fotos','publicaciones.id_foto','=','fotos.id_Fotos')
       				   ->where('publicaciones.id_usuario','=',1)->get();
       
       return view('publicaciones',['publicaciones'=>$publicaciones]);
    }
}
