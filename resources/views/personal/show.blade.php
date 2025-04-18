@extends('adminlte::page')

@section('title', 'ParkiAPP - Datos personales')

@section('content_header')
    <h1>Detalle de datos personales</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header bg-light">
        <h3 class="card-title">Información de {{ $personal->nombre }} {{ $personal->apellido }}</h3>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $personal->id }}</p>
        <p><strong>Usuario ID:</strong> {{ $personal->usuario_id }}</p>
        <p><strong>Identificación:</strong> {{ $personal->identificacion }}</p>
        <p><strong>Nombre:</strong> {{ $personal->nombre }}</p>
        <p><strong>Apellido:</strong> {{ $personal->apellido }}</p>
        <p><strong>Celular:</strong> {{ $personal->celular ?? 'N/A' }}</p>
        <p><strong>Dirección Casa:</strong> {{ $personal->direccion_casa ?? 'N/A' }}</p>
        <p><strong>Dirección Oficina:</strong> {{ $personal->direccion_oficina ?? 'N/A' }}</p>
        <a href="{{ route('personal.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@stop

@section('css')
    {{-- Estilos personalizados si los hay --}}
@stop

@section('js')
    <script> console.log("Show Personal View"); </script>
@stop
