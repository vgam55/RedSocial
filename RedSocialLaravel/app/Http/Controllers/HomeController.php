<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;

use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return redirect()->action('HomeController@inicio');
    }

    public function inicio()
    {
        $amigos=DB::table('amigos')->select('id_usuario_destinatario')
        ->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
        ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
        ->where('estado','=',1)->get();

        $listaAmigos = array();
        foreach ($amigos as $key => $amigo)
        {
            $listaAmigos[$key] = $amigo->id_usuario_destinatario;
        }
        $listaAmigos[] = Auth::user()->id_Usuario;

        $publicaciones = Publicacion::select('users.avatar','users.name', 'publicaciones.id_Publicaciones', 'publicaciones.id_usuario', 'publicaciones.fecha', 'publicaciones.contenido', 'publicaciones.id_foto', 'publicaciones.id_album')
            ->join('users', 'publicaciones.id_usuario', '=', 'users.id_Usuario')
            ->get();

        return view('inicio',['listaAmigos'=>$listaAmigos, 'publicaciones'=>$publicaciones]);
    }
}
