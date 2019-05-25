@extends('layouts.master')
@section('adiskideak')

	@foreach($listaAmigos as $amigo)
	<div >
	 
	  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">
	 
	  <form class="form-inline" action="{{ url('/deleteAmigos/'.$amigo->id_Usuario_Amigo) }}" method="POST">
	    {{ csrf_field() }}
	    {{ method_field('DELETE') }}
        <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}" class="btn btn-primary stretched-link col-5">{{$amigo->name}}</a>
	    <button class="btn btn-danger stretched-link col-5" type="submit">Borrar</button>
	  </form>
	</div>
	@endforeach

@endsection



