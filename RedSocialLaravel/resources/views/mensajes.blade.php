@extends('layouts.master')
@section('content')
<button type="button" class="btn btn-primary">Nuevo</button>
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

@endsection