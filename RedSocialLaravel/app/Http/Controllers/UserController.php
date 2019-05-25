<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Http\UploadFile;

class UserController extends Controller
{
    public function getUser()
    {
        //Lleva al formulario donde metemos los datos para actualizar el perfil del usuario.
        return view('usuarios');
    }
    public function getUserByName(Request $request)
    {
        $nombre=$request->input('buscar');
        $usuarios=User::where('name','like','%'.$nombre.'%')->whereNotIn('id_Usuario', [Auth::user()->id_Usuario])->get();
        
        
        return view('listaUsuarios',['listaUsuarios'=>$usuarios]);
    }

    public function updateUser(Request $request)
    {
        $name="";
        $usuario=User::findOrfail(Auth::user()->id_Usuario);
        $usuario->name=$request->input('nombre');
        $usuario->email=$request->input('userEmail');
        $usuario->password=bcrypt($request->input('userPwd'));
        $usuario->fecha_Nac=$request->input('birthDate');
        $usuario->avatar=Auth::user()->avatar;
        Auth::user()->name=$usuario->name;
        Auth::user()->email=$usuario->email;
        Auth::user()->password=$usuario->password;
        Auth::user()->fecha_Nac=$usuario->fecha_Nac;
      //  if ($request->file('avatar')->isValid()) {
            
            if($request->file('avatar')!=null)
            {
                $archivo=$request->file('avatar');
                $usuario->avatar=$archivo->getClientOriginalName();
                 $destino=base_path() . '/public/img/';
            $archivo->move($destino,$usuario->avatar);
            }
            else
            {
                $usuario->avatar=$request->input('avatarO');
            }
           
        //}
       /*    $usuario->avatar = $request->file('image')->getClientOriginalName();
           $name = $request->file('image')->getClientOriginalName();       
           Storage::disk('public')->putFileAs('foto', new File($request->file('image')),$name,'public');*/
        
        $usuario->save();
       return redirect()->route('inicio');
    }

    public function deleteUser($idUsuario)
    {
    	Auth::logout();
    	User::destroy($idUsuario);

    	//$usuario->delete();
    	return redirect()->route('login');
    }
}
