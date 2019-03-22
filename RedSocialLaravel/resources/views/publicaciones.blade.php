@extends('layouts.master')
@section('content')
   @foreach($publicaciones as $publicacion)

     <div class="card col-12">
        <img src="/img/{{$publicacion->ruta_foto}}" class="card-img-top col-12" alt="...">
        <div class="card-body col-12">
          <p class="card-text">{{$publicacion->contenido}}</p>
        </div>
      </div>
   @endforeach
@endsection