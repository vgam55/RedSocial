@extends('layouts.master')
@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
<button type="button" class="btn btn-danger">Eliminar</button>

<table class="table table-hover my-5 text-left">
  <thead>
    <tr>
      <th scope="col ">Remitente</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
      <td >Victor</td>
      <td >Hola...</td>
      <td>13 May</td>
    </tr>
    <tr class="table-secondary">
      <td >Samuel</td>
      <td >Hola...</td>
      <td>11 May</td>
    </tr>
    <tr class="table-success">
      <td >Andrade</td>
      <td >Hola cielo..</td>
      <td>10 May</td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo MEnsaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label col-form-label-sm">Para</label>
            
    <div class="col-sm-10">
            <select id="destinatario" class="form-control form-control-sm">
              <option selected>Selecciona...</option>
              <option>Andrade</option>
              <option>Victor</option>
              <option>Samuel</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-left">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

</form>
@endsection