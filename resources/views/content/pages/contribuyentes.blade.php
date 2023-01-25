@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Contribuyentes')

@section('content')
<h4>Contribuyentes</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <a href="{{route('pages-contribuyentes-crear')}}" class="btn btn-primary">Crear nuevo contribuyente</a>
  
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>TIPO DOCUMENTO</th>
          <th>NRO. DE DOCUMENTO</th>
          <th>ESTADO CIVIL</th>
          <th>CUIT</th>
          <th>INGRESOS BRUTOS</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>FECHA DE NACIMIENTO</th>
          <th>TELÈFONO</th>
          <th>CÒNYUGE</th>
          <th>DNI CÒNYUGE</th>
          <th>Creado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        
          @foreach($contribuyentes as $contribuyente)
            <tr>
                <td>{{$contribuyente->id}}</td>
                <td>{{$contribuyente->tipo_dni_id}}</td>
                <td>{{$contribuyente->nro_documento}}</td>
                <td>{{$contribuyente->estado_civil_id}}</td>
                <td>{{$contribuyente->cuit}}</td>
                <td>{{$contribuyente->ingresos_brutos}}</td>
                <td>{{$contribuyente->nombre}}</td>
                <td>{{$contribuyente->apellido}}</td>
                <td>{{$contribuyente->fecha_nacimiento}}</td>
                <td>{{$contribuyente->telefono}}</td>
                <td>{{$contribuyente->conyuge}}</td>
                <td>{{$contribuyente->dni_conyuge}}</td>
                <td>{{$contribuyente->created_at}}</td>
                <td><a href="{{route('pages-contribuyente-mostrar', $contribuyente->id)}}">Editar</a> 
                    <a href="{{route('pages-contribuyentes-eliminar', $contribuyente->id)}}">Borrar</a>
                </td>
            </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->


@endsection