@extends('layouts.master')
@section('content')

<form  action="{{url('/create')}}" method="POST" >

    {{ csrf_field() }}
    {{ method_field('POST') }}

    <div class="mt-5">
        <label class="font-weight-bold" for="nombre">Publicacion:</label><br>
        <textarea name="contenido" id="contenido" cols="90" rows="10"></textarea>
    </div>
        <div>
         <button type="submit" class="btn btn-success float-right">Publicar</button>
        </div>

    </form>

@endsection
