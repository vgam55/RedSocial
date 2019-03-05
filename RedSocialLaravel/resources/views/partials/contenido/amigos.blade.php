@foreach($amigos as $amigo)
<div>
  <img src="img/{{$amigo->avatar}}" alt="{{$amigo->avatar}}" class="img-fluid">
  <h4 class="text-start">{{$amigo->name}}</h4>
</div>
@endforeach