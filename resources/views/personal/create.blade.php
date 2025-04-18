@extends('adminlte::page')

@section('title', 'ParkiAPP - Datos personales')

@section('content_header')
    <h1>Registro de datos personales</h1>
@stop

@section('content')
    {{-- Mostrar errores de validación, si existen --}}
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Por favor corrige los siguientes errores:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            {{-- Botón para cerrar la alerta --}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<div class="card">
    <div class="card-header bg-light">
        <h3 class="card-title">Registrar datos personales</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('personal.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="identificacion">Identificación</label>
                <input type="number" name="identificacion" class="form-control" placeholder="Número de identificación" value="{{ old('identificacion') }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombres</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombres" value="{{ old('nombre') }}" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellidos" value="{{ old('apellido') }}" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" name="celular" class="form-control" placeholder="Número de celular" value="{{ old('celular') }}">
            </div>
            <div class="form-group">
                <label for="direccion_casa">Dirección Casa</label>
                <input type="text" name="direccion_casa" class="form-control" placeholder="Dirección de casa" value="{{ old('direccion_casa') }}">
            </div>
            <div class="form-group">
                <label for="direccion_oficina">Dirección Oficina</label>
                <input type="text" name="direccion_oficina" class="form-control" placeholder="Dirección de oficina" value="{{ old('direccion_oficina') }}">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('personal.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>
@stop

@section('css')
    {{-- Estilos personalizados si los hay --}}
@stop

@section('js')
    <script> console.log("Create Personal View"); </script>
@stop
