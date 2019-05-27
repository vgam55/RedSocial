@extends('layouts.master')
@section('content')
	@foreach($listaAmigos as $amigo)
        <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid w-25">

        <form class="form-inline text-center d-flex" action="{{ url('/deleteAmigos/'.$amigo->id_usuario_destinatario) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
        @if ($publicaciones->count() > 0)
            @foreach ($publicaciones as $publicacion)
                @if($publicacion->id_usuario == $amigo->id_usuario_destinatario)
                    <div class="card mb-3">
                    <!--  <img src="" class="card-img-top" > -->
                        <div class="card-body">
                            <h5 class="card-title">{{$publicacion->name}} </h5>
                            <p class="card-text">{{ $publicacion->contenido }}</p><br>
                            <p class="card-text"><small class="text-muted"></small>{{ $publicacion->fecha }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            No hay publicaciones nuevas
        @endif
    @endforeach
@endsection