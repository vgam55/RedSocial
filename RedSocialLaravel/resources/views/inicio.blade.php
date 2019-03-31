@extends('layouts.master')
@section('content')
@if ($publicaciones->count() > 0)
        @foreach ($publicaciones as $publicacion)
            {{ $publicacion->contenido }}<br>
        @endforeach
    @else
        No hay publicaciones nuevas
    @endif
@endsection