<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $mensajes = Mensaje::select('id_Mensaje','id_Remitente', 'id_Destinatario', 'mensaje', 'fecha')->where('id_Destinatario', Auth::user()->id_Usuario)->get();
        //$mensajes = Mensaje::all();
        // carga la vista y pasa los publicacioes
        return view('mensajes',['mensajes'=>$mensajes]);
    }

    public function create(Request $request)
    {
        //INSERTAR A LA BASE DE DATOS
        $mensajes=new Mensaje();
        $fecha = new DateTime();
        $mensajes->id_Remitente= Auth::user()->id_Usuario;
        $mensajes->id_Destinatario=$request->input('destinatario');
        $mensajes->fecha=$date->format('Y-m-d');
    	$mensajes->mensaje=$request->input('mensaje');

    	$publicacion->save();
        return redirect('mensajes');
    }

    //METODO DELETE
    public function delete($id_Mensaje)
    {

        Mensaje::find($id_Mensaje)->delete();
         return redirect('mensajes');
    }
}