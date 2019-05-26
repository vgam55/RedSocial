@extends('layouts.master')
@section('content')
<div class = "col-12 mb-5">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
</div>
@if ($mensajes->count() > 0)
<div class="col-12 mx-auto">
  <table class="table table-hover my-5 text-left">
    <thead>
      <tr>
        <th scope="col ">Remitente</th>
        <th scope="col">Mensaje</th>
        <th scope="col">Fecha</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($mensajes as $mensaje)
      <tr class="table-primary">
        <td class="align-middle col-1">{{ $mensaje->name }}</td>
        <td class="align-middle col-6">{{ $mensaje->mensaje }}</td>
        <td class="align-middle col-1">{{ $mensaje->fecha }}</td>
        <td class="align-middle col-4">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $mensaje->id_Mensaje }}">Mostrar</button>
          <form action="{{action('MensajesController@delete',$mensaje->id_Mensaje)}}" method="POST" style="display:inline">
            {{method_field('DELETE')}}
            {{csrf_field()}}
              <button type="submit" class="btn btn-danger">Borrar</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@else
  No hay mensajes
@endif

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{url('/mensaje/create')}}" method="POST" >
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}
          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label col-form-label-sm">Para</label>
            <div class="col-sm-10">
              <select name="destinatario" class="form-control form-control-sm">
                <option selected>Selecciona...</option>
                @foreach ($amigos as $amigo)
                  <option value="{{ $amigo->id_Usuario }}">{{ $amigo->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-left">Mensaje:</label>
            <textarea class="form-control" name="mensaje"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
    </form>
  </div>
</div>

@if ($mensajes->count() > 0)
@foreach ($mensajes as $mensaje)
<div class="modal fade" id="modal{{ $mensaje->id_Mensaje }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{{$mensaje->name}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="">
          {{$mensaje->mensaje}}
        </div>
      </div>
      <form  action="{{url('/mensaje/create')}}" method="POST" >
        <div id="respuesta{{ $mensaje->id_Mensaje }}">
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('POST') }}
                <div class="form-group row">
                  <input type="hidden" name="destinatario" value="{{ $mensaje->id_Remitente }}">
                </div>
                <div class="form-group">
                <hr>
                  <label for="message" class="col-form-label text-left">Mensaje:</label>
                  <textarea class="form-control" name="mensaje"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#responder" id="hide{{ $mensaje->id_Mensaje }}">Responder</button></a>
          <button type="submit" class="btn btn-primary" id="enviar{{ $mensaje->id_Mensaje }}">Enviar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar{{ $mensaje->id_Mensaje }}">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  @foreach ($mensajes as $mensaje)
    $("#respuesta{{ $mensaje->id_Mensaje }}").hide();
    $("#enviar{{ $mensaje->id_Mensaje }}").hide();

    $("#hide{{ $mensaje->id_Mensaje }}").click(function(){
      if($("#respuesta{{ $mensaje->id_Mensaje }}").hide()){
        $("#respuesta{{ $mensaje->id_Mensaje }}").show("slow");
        $("#enviar{{ $mensaje->id_Mensaje }}").show("slow");
        $("#hide{{ $mensaje->id_Mensaje }}").hide("fast");
      }
      else{
        $("#respuesta{{ $mensaje->id_Mensaje }}").hide("fast");
        $("#enviar{{ $mensaje->id_Mensaje }}").hide("fast");
        $("#hide{{ $mensaje->id_Mensaje }}").show("fast");
      }
    });
    $("#cerrar{{ $mensaje->id_Mensaje }}").click(function(){
      $("#respuesta{{ $mensaje->id_Mensaje }}").hide("fast");
      $("#enviar{{ $mensaje->id_Mensaje }}").hide("fast");
      $("#hide{{ $mensaje->id_Mensaje }}").show("fast");
    });
  @endforeach
});
</script>
@endif
@endsection
