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
       return redirect()->action('AmigosController@getAmigos');
    }

    public function inicio()
    {
        $publicaciones = Publicacion::all();
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();

        return view('inicio',['publicaciones'=>$publicaciones, 'amigos'=>$amigos]);
    }
}
