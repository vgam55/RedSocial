@extends('layouts.master')
@section('content')
    @if ($peticiones->count() > 0)
    <h2>Peticiones de amistad:</h2><br>
        @foreach ($peticiones as $peticion)

            <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/{{$peticion->avatar}}" class="card-img" width="160px" height="190px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$peticion->name}}</h5>
               <a href="aceptarAmistad/{{$peticion->id_Usuario}}" class="btn btn-primary stretched-link">Aceptar petición de amistad</a>
          </div>
        </div>
      </div>
    </div>

        @endforeach
    @else
        No tienes peticiones de amistad
    @endif
@endsection
