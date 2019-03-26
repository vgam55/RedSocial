@foreach($amigos as $amigo)
<div>
<<<<<<< HEAD
  <img src="{{asset('img/'.$amigo->avatar)}}" alt="{{$amigo->avatar}}" class="img-fluid">
=======
 
  <img src="{{ asset('img/'.$amigo->avatar) }}" alt="{{$amigo->avatar}}" class="img-fluid">
>>>>>>> e33c769749b0615de02747ba6ca78c5e9b2a96e2
  <a href="{{url('/getPublicaciones/'.$amigo->id_usuario_destinatario)}}">{{$amigo->name}}</a>
</div>
@endforeach

{{--<script src="{{ asset('js/amigos.js') }}"></script>--}}