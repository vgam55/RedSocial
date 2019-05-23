@extends('inicio1')
@section('adiskideak')
	@foreach($listaAmigos as $amigo)
	<div >
	 
	  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">
	 
	  <form class="form-inline" action="{{ url('/deleteAmigos/'.$amigo->id_Usuario) }}" method="POST">
	        {{ csrf_field() }}
	        {{ method_field('DELETE') }}
<<<<<<< HEAD
	         <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}" class="btn btn-primary stretched-link col-5">{{$amigo->name}}</a>
=======
	        <a href="{{url('/getPublicaciones/'.$amigo['id_usuario_destinatario'])}}" class="btn btn-primary stretched-link col-5">{{$amigo->name}}</a>
>>>>>>> 23a47e02b650e44d8123c46445eb062a8c291dc2
	        <button class="btn btn-danger stretched-link col-5" type="submit">Borrar</button>
	  </form>
	</div>
	@endforeach
<<<<<<< HEAD
@endsection

=======
@else

@endif--}}
>>>>>>> 23a47e02b650e44d8123c46445eb062a8c291dc2

