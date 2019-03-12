<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getUserByName(Request $request)
    {
        $nombre=$request->input('buscar');
        $usuarios=User::where('name','like','%'.$nombre.'%')->get();
        //Esto es provisional hasta que pueda integrar bien Ajax
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
                ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
                ->where('estado','=',1)->get();
        return view('listaUsuarios',['amigos'=>$amigos,
                                     'listaUsuarios'=>$usuarios]);
    }

    public function updateUser($idUsuario)
    {}

    public function deleteUser($idUsuario)
    {
    	Auth::logout();
    	User::destroy($idUsuario);

    	//$usuario->delete();
    	return redirect()->route('login');
    }
}
