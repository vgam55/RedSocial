<div>
  {{--  <img src="{{ asset('img/perfil.jpg') }}" title="" style="height: 50px" class="rounded-circle"> --}}
	<div class="card " style="max-width: 250px; min-width:100px;position:absolute;left:-3em;">

		  <div class="row no-gutters border-dark text-black">
		    <div class="col-md-4">
		      <img src="{{asset('img/'.Auth::user()->avatar)}}" class="card-img" alt="{{Auth::user()->avatar}}">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <p class="card-text"><small>{{Auth::user()->name}}</small></p>
		      </div>
		    </div>
		  </div>
		  <form action="{{ url('/deleteUser/'.Auth::user()->id_Usuario) }}" method="POST">
		  	  {{ csrf_field() }}
		  	  {{ method_field('delete') }}
		  	  <a href=" {{ url('/usuario') }} " class="btn btn-primary col-sm-4">Editar</a>
		  	  <button type="submit" class="btn btn-danger col-sm-4">Borrar</button>
		  </form>

   </div>
</div><br>
