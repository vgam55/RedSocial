@extends('layouts.master')
@section('content')
	@foreach($listaUsuarios as $usuario)
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img src="{{asset('img/'.$usuario->avatar)}}" class="card-img" width="160px" height="190px">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title">{{$usuario->name}}</h5>
	           <a href="{{url('/getAmistad/'.$usuario->id_Usuario)}}" class="btn btn-primary stretched-link">Solicitud de amistad</a>
	      </div>
	    </div>
	  </div>
	</div>
	@endforeach
@endsection
