@extends('layouts.master')
@section('content')
    <form action="{{url('/updateUser/'.Auth::user()->id_Usuario)}}" method="POST">
     {{ csrf_field() }}
      {{ method_field('PUT') }}
      
      <div class="form-row">
        <div class="form-group col-12 col-sm-6 col-md-6 col-xl-4" >
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pedro Perez">
        </div>

        <div class="form-group col-12 col-sm-6 col-md-6 col-xl-4">
          <label for="userEmail">Email</label>
          <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="cuenta@dominio.net">
        </div>

        <div class="form-group col-12 col-sm-6 col-md-6 col-xl-4">
          <label for="userPwd">Password</label>
          <input type="password" class="form-control" id="userPwd" name="userPwd" placeholder="Password">
        </div>

        <div class="form-group col-12 col-sm-6 col-md-6 col-xl-4">
          <label for="birthDate">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="birthDate" name="birthDate">
        </div>

       <div class="form-group col-12">
        <label for="avatar">Avatar</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
      </div>

      </div>
       
       <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection