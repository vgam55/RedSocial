@foreach($amigos as $amigo)
<div>
  <img src="{{asset('img/'.$amigo->avatar)}}" alt="{{$amigo->avatar}}" class="img-fluid">
  <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}">{{$amigo->name}}</a>
</div>
@endforeach

{{--<script src="{{ asset('js/amigos.js') }}"></script>--}}