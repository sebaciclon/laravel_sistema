@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Usuarios')

@section('content')
<h4>Usuarios de la aplicacion</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <a href="{{route('pages-usuarios-crear')}}" class="btn btn-primary">Crear nuevo usuario</a>
  
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo electrònico</th>
          <th>Creado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        
          @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->created_at}}</td>
                <td><a href="{{route('pages-usuario-mostrar', $usuario->id)}}">Editar</a> 
                    <a href="{{route('pages-usuarios-eliminar', $usuario->id)}}">Borrar</a>
                </td>
            </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->


@endsection