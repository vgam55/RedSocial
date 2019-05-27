<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Mensaje;

class MensajesController extends Controller
{
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
        return view('mensajes');
    }

    public function read()
    {
        $mensajes = Mensaje::select('users.name', 'mensajes.id_Mensaje', 'mensajes.id_Remitente', 'mensajes.id_Destinatario', 'mensajes.mensaje', 'mensajes.fecha')
        ->join('users', 'id_Remitente','=', 'users.id_Usuario')
        ->where('id_Destinatario', Auth::user()->id_Usuario)
        ->get();
       // $mensajes = Mensaje::select('id_Mensaje','id_Remitente', 'id_Destinatario', 'mensaje', 'fecha')->where('id_Destinatario', Auth::user()->id_Usuario)->get();
        //$mensajes = Mensaje::all();
        // carga la vista y pasa los publicacioes
        $amigos=DB::table('amigos')->join('users','users.id_Usuario','=','amigos.id_usuario_destinatario')
        ->where('id_usuario_remitente','=',Auth::user()->id_Usuario)
        ->where('estado','=',1)->get();

        return view('mensajes',['mensajes'=>$mensajes, 'amigos'=>$amigos]);
    }

    public function create(Request $request)
    {
        //INSERTAR A LA BASE DE DATOS
        $mensajes=new Mensaje();
        $fecha = new DateTime();
        $mensajes->id_Remitente= Auth::user()->id_Usuario;
        $mensajes->id_Destinatario=$request->input('destinatario');
    	$mensajes->mensaje=$request->input('mensaje');
        $mensajes->fecha=$fecha->format('Y-m-d');

        $mensajes->save();
        flash('Mensaje enviado con exito')->success();
      
        return redirect('mensajes');
    }



    //METODO DELETE
    public function delete($id_Mensaje)
    {
        Mensaje::find($id_Mensaje)->delete();
        flash('Mensaje borrado con exito')->error();
         return redirect('mensajes');
    }
}
