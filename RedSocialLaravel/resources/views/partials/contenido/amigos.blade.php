@foreach($amigos as $amigo)
	<div>
	 
	  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">
	 
	  <form class="form-inline" action="{{ url('/deleteAmigos/'.$amigo->id_Usuario) }}" method="POST">
	        {{ csrf_field() }}
	        {{ method_field('DELETE') }}
	       
	        <button class="btn btn-danger stretched-link col-5" type="submit">Borrar</button>
	  </form>
	</div>
@endforeach


