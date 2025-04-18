@extends('adminlte::page')

@section('title', 'ParkiAPP - Datos personales')

@section('content_header')
    <h1>Editar datos personales</h1>
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
        <h3 class="card-title">Editar datos personales: {{ $personal->nombre }} {{ $personal->apellido }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('personal.update', $personal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="identificacion">Identificación</label>
                <input type="number" name="identificacion" class="form-control" value="{{ old('identificacion', $personal->identificacion) }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $personal->nombre) }}" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $personal->apellido) }}" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" name="celular" class="form-control" value="{{ old('celular', $personal->celular) }}">
            </div>
            <div class="form-group">
                <label for="direccion_casa">Dirección Casa</label>
                <input type="text" name="direccion_casa" class="form-control" value="{{ old('direccion_casa', $personal->direccion_casa) }}">
            </div>
            <div class="form-group">
                <label for="direccion_oficina">Dirección Oficina</label>
                <input type="text" name="direccion_oficina" class="form-control" value="{{ old('direccion_oficina', $personal->direccion_oficina) }}">
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('personal.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>
@stop

@section('css')
    {{-- Estilos personalizados si los hay --}}
@stop

@section('js')
    <script> console.log("Edit Personal View"); </script>
@stop
