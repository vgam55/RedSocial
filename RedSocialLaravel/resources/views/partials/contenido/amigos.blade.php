@foreach($amigos as $amigo)
<div>
 
  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">
 
  <form class="form-inline" action="{{ url('/deleteAmigos/'.$amigo->id_Usuario) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
         <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}" class="btn btn-primary stretched-link col-5">{{$amigo->name}}</a>
        <button class="btn btn-danger stretched-link col-5" type="submit">Borrar</button>
  </form>
 {{-- <a href="{{url('/deleteUser/'.$amigo->id_Usuario)}}" class="btn btn-danger stretched-link col-5">Borrar</a>--}}
</div>
@endforeach

{{--<script src="{{ asset('js/amigos.js') }}"></script>--}}