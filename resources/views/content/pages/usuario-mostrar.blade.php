@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear usuario')

@section('content')

<div class="row">
  <div class="col-xl-12">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Actualizando un nuevo usuario</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('pages-usuarios-actualizar')}}">
            @csrf
            <input type="hidden" name="usuario_id" value="{{$usuario->id}}">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" id="basic-default-nombreCompleto" value="{{$usuario->name}}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Correo electrònico</label>
            <input type="text" name="correo" class="form-control" id="basic-default-correo" value="{{$usuario->email}}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Contraseña nueva</label>
            <input type="password" name="contraseña_nueva" class="form-control" id="basic-default-contraseña" />
          </div>
          
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
  
</div>
@endsection