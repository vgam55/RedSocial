@extends('layouts.master')
@section('content')

<div class="mt-4 ">
    <form id="usuarios"  enctype="multipart/form-data" action="{{url('/updateUser/'.Auth::user()->id_Usuario)}}"  method="POST">
     {{ csrf_field() }}
     {{ method_field('PUT') }}


        <div class="row">

            <div class="form-group col-12  col-md-6 " >
            <label class="font-weight-bold" for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{Auth::user()->name}}" placeholder="Pedro Perez">
            </div>

            <div class="form-group col-12  col-md-6">
            <label class="font-weight-bold" for="userEmail">Email</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" value="{{Auth::user()->email}}" placeholder="cuenta@dominio.net">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-12  col-md-6">
            <label class="font-weight-bold" for="userPwd">Password</label>
            <input type="password" class="form-control" id="userPwd" name="userPwd" value="Aa123456" placeholder="Password">
            </div>

            <div class="form-group col-12  col-md-6">
            <label class="font-weight-bold" for="birthDate">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" value="{{Auth::user()->fecha_Nac}}">
            </div>
        </div>

       <div class="form-group col-12">
        <label for="avatar">Avatar</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
      </div>

        <input id="avatarO" name="avatarO" type="hidden" value="{{Auth::user()->avatar}}">

       <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

@section('js')
    <script src="js/validarUpdate.js"></script>
@endsection
