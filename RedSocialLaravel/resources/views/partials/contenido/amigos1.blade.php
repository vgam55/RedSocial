@extends('layouts.master')
@section('adiskideak')

	@foreach($listaAmigos as $amigo)
	<div ><br>

	  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">

	  <form class="form-inline text-center d-flex" action="{{ url('/deleteAmigos/'.$amigo->id_Usuario_Amigo) }}" method="POST">
	    {{ csrf_field() }}
	    {{ method_field('DELETE') }}
        <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}" class="btn btn-primary btn-sm stretched-link flex-fill">{{$amigo->name}}</a>
	    <button class="btn btn-danger btn-sm stretched-link flex-fill" type="submit">Borrar</button>
	  </form>
	</div>
	@endforeach

@endsection



