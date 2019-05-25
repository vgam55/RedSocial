@extends('layouts.master')
@section('content')
<div class = "col-12 mb-5">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
</div>
@if ($mensajes->count() > 0)
<div class="col-10 mx-auto">
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
        <td class="align-middle">{{ $mensaje->name }}</td>
        <td class="align-middle">{{ $mensaje->mensaje }}</td>
        <td class="align-middle">{{ $mensaje->fecha }}</td>
        <td class="align-middle">
            <form action="{{action('MensajesController@delete',$mensaje->id_Mensaje)}}" method="POST" style="display:inline">
          {{method_field('DELETE')}}
          {{csrf_field()}}
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#yourModal">Mostrar</button>
            <button type="submit" class="btn btn-danger">Borrar</button>
      </form></td>
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
<div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{{$mensaje->name}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        {{$mensaje->mensaje}}
      </div>
      <div id="respuesta">
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
        </form>
      </div>
      <div class="modal-footer">
              <a href="javascript:void(document.getElementById('responder').display='block')">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#responder" id="hide">Responder</button></a>
              <form action="{{action('MensajesController@delete',$mensaje->id_Mensaje)}}" method="POST" style="display:inline">
                  {{method_field('DELETE')}}
                  {{csrf_field()}}
                    <button type="submit" class="btn btn-danger" >Borrar</button>
              </form>
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Close</button>
            </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#respuesta").hide();
  $("#hide").click(function(){
    $("#respuesta").hide();
  });
  $("#cerrar").click(function(){
    $("#respuesta").hide();
  });
  $("#hide").click(function(){
    $("#respuesta").show();
  });
});
</script>
@endif
@endsection
