@extends('adminlte::page')

@section('title', 'ParkiAPP - Datos personales')

@section('content_header')
    <h1>Registros de datos personales</h1>
@stop

@section('content')
    {{-- Aquí mostramos el mensaje de éxito si existe --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            {{-- Botón para cerrar la alerta --}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<div class="card">
    <div class="card-header bg-light">
        <h3 class="card-title">Registros de datos personales</h3>
        <div class="card-tools">
            @if(!(isset($personal->id)))
                <a href="{{ route('personal.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Registrar datos Personales
                </a>
            @endif
        </div>
    </div>
    <div class="card-body">
        @if(isset($personal->id))
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $personal->id }}</td>
                        <td>{{ $personal->identificacion }}</td>
                        <td>{{ $personal->nombre }}</td>
                        <td>{{ $personal->apellido }}</td>
                        <td>{{ $personal->celular ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('personal.show', $personal->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('personal.edit', $personal->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('personal.destroy', $personal->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>No hay registros de datos personales aún.</p>
        @endif
    </div>
</div>
@stop

@section('css')
    {{-- Estilos personalizados si los hay --}}
@stop

@section('js')
    <script> console.log("Index Personal"); </script>
@stop