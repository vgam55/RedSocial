@extends('layouts.master')
@section('content')
    @if ($notificaciones->count() > 0)
        @foreach ($publicaciones as $notificaciones)
            <h2>Publicaciones:</h2>
            @if ($publicaciones->tipo == 1)
                {{ $publicaciones->id_Notificaciones }}
            @endif
            <h2>Amistades:</h2>
            @if ($publicaciones->tipo == 2)
                {{ $publicaciones->id_Notificaciones }}
            @endif
            <h2>Mensajes:</h2>
            @if ($publicaciones->tipo == 3)
                {{ $publicaciones->id_Notificaciones }}
            @endif
        @endforeach
    @else
        No hay notificaciones nuevas
    @endif
@endsection