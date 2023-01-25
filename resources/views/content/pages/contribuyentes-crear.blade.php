@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear contribuyente')

@section('content')

<div class="row">
    
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Creando un nuevo contribuyente</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('pages-contribuyentes-guardar')}}">
                        @csrf
                        <label class="form-label" for="basic-default-fullname">Tipo de documento</label>
                        <div class="mb-3">
                          <select name="tipo_dni_id" class="form-control" id="basic-default-nombreCompleto" >
                              @foreach($tipos as $tipo)
                                  <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Numero documento</label>
                          <input required type="text" name="nro_documento" class="form-control" id="basic-default-nombreCompleto"  />
                        </div>
                        <label class="form-label" for="basic-default-fullname">Estado civil</label>
                        <div class="mb-3">
                          <select name="estado_civil_id" class="form-control" id="basic-default-nombreCompleto">
                              @foreach($estados as $estado)
                                  <option value="{{$estado->id}}">{{$estado->descripcion}}</option>
                              @endforeach
                          </select>
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Cuit</label>
                          <input required type="text" name="cuit" class="form-control" id="basic-default-nombreCompleto" placeholder="Cuit" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Ingresos brutos</label>
                          <input required type="text" name="ingresos_brutos" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nombre</label>
                          <input required type="text" name="nombre" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Apellido</label>
                          <input required type="text" name="apellido" class="form-control" id="basic-default-nombreCompleto" />
                        </div><div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Fecha de nacimiento</label>
                          <input required type="text" name="fecha_nacimiento" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                        </div><div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Telefono</label>
                          <input type="text" name="telefono" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                        </div><div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Cònyuge</label>
                          <input type="text" name="conyuge" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                        </div><div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">DNI del cònyuge</label>
                          <input type="text" name="dni_conyuge" class="form-control" id="basic-default-nombreCompleto" />
                        </div>
                  
                      <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
  
</div>
@endsection