<div>
  {{--  <img src="{{ asset('img/perfil.jpg') }}" title="" style="height: 50px" class="rounded-circle"> --}}
  <div class="card border-primary" style="max-width: 150px; min-width:100px;">	
	<div class="card" style="max-width: 150px;">
		  <div class="row no-gutters border-dark bg-success text-white">
		    <div class="col-md-4">
<<<<<<< HEAD
		      <img src="{{asset('img/'.Auth::user()->avatar)}}" class="card-img" alt="{{Auth::user()->avatar}}">
		    </div>
=======
		      <img src="{{ asset('img/'.Auth::user()->avatar)}}" class="card-img" alt="Auth::user()->avatar">
		    </div>
		   
>>>>>>> e33c769749b0615de02747ba6ca78c5e9b2a96e2
		    <div class="col-md-8">
		      <div class="card-body">
		        <p class="card-text"><small>{{Auth::user()->name}}</small></p>
		      </div>
		    </div>
		  </div>
		  <form action="{{ url('/deleteUser/'.Auth::user()->id_Usuario) }}" method="POST">
		  	  {{ csrf_field() }}
		  	  {{ method_field('delete') }}
		  	  <button type="submit" class="btn btn-primary col-12">Borrar</button>
		  </form>
	</div>
   </div>
</div>