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
              <h5 class="mb-0">Creando un nuevo usuario</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('pages-usuarios-guardar')}}">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nombre completo</label>
                          <input required type="text" name="nombre" class="form-control" id="basic-default-nombreCompleto" placeholder="Seba Esains" />
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Correo electrònico</label>
                          <input required type="text" name="correo" class="form-control" id="basic-default-correo" placeholder="seba@gmail.com" />
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Contraseña</label>
                          <input required type="password" name="contraseña" class="form-control" id="basic-default-contraseña" placeholder="contraseña secreta" />
                      </div>
                  
                      <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
  
</div>
@endsection