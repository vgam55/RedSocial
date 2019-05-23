@extends('layouts.master')
@section('content')

<a href="{{url('publicaciones')}}" class="btn btn-primary m-3">Nueva Publicacion</a>

@if ($publicaciones->count() > 0)
    @foreach ($publicaciones as $publicacion)

    <div class="card mb-3">
    <!--  <img src="" class="card-img-top" > -->
      <div class="card-body">
        <h5 class="card-title">{{$publicacion->name}} </h5>

        <p class="card-text">{{ $publicacion->contenido }}<br></p>

        <p class="card-text"><small class="text-muted"></small>{{ $publicacion->fecha }}</p>
      </div>
      @if (Auth::user()->id_Usuario==$publicacion->id_usuario)
      <form action="{{action('PublicacionesController@delete',$publicacion->id_Publicaciones)}}" method="POST"
        style="display:inline">
        {{method_field('DELETE')}}
        {{csrf_field()}}
            <button type="submit" class="btn btn-danger mb-2" style="padding:8px 10px;margin-top:25px;">
            Borrar
        </button>
    </form>
    @endif
    </div>

    @endforeach
@else
    No hay publicaciones nuevas
@endif
@endsection
