<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notificacion;

use App\Amigo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class NotificacionesController extends Controller
{
    public function index(){
        $notificaciones = Notificacion::all();
        return view('alertas',['notificaciones'=>$notificaciones]);
    }
}
