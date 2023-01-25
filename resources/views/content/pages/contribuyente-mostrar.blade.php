@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Actualizar contribuyente')

@section('content')

<div class="row">
    
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Actualizando un nuevo contribuyente</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('pages-contribuyentes-actualizar')}}">
                    @csrf
                    <input type="hidden" name="contribuyente_id" value="{{$contribuyente->id}}">
                    <label class="form-label" for="basic-default-fullname">Tipo de documento</label>
                    <select name="tipo_dni_id" id="">
                        @foreach($tipos as $tipo)
                           <option value="{{$tipo->id}}" @if($tipo->id == $contribuyente->tipo_dni_id) selected @endif>{{$tipo->descripcion}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Numero documento</label>
                        <input type="text" name="nro_documento" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->nro_documento}}" />
                    </div>
                    <label class="form-label" for="basic-default-fullname">Estado civil</label>
                    <select name="estado_civil_id" id="">
                        @foreach($estados as $estado)
                            <option value="{{$estado->id}}" @if($estado->id == $contribuyente->estado_civil_id) selected @endif>{{$estado->descripcion}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Cuit</label>
                        <input type="text" name="cuit" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->cuit}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Ingresos brutos</label>
                        <input type="text" name="ingresos_brutos" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->ingresos_brutos}}"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->nombre}}"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->apellido}}"/>
                    </div><div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Fecha de nacimiento</label>
                        <input type="text" name="fecha_nacimiento" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->fecha_nacimiento}}"/>
                    </div>
                    </div><div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->telefono}}"/>
                    </div>
                    </div><div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Cònyuge</label>
                        <input type="text" name="conyuge" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->conyuge}}"/>
                    </div>
                    </div><div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">DNI del cònyuge</label>
                        <input type="text" name="dni_conyuge" class="form-control" id="basic-default-nombreCompleto" value="{{$contribuyente->dni_conyuge}}"/>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
  
</div>
@endsection