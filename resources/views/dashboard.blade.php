@extends('adminlte::page')

@section('title', 'ParkiAPP')

@section('content_header')
    <h1>Dashboard Parkiapp</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header bg-light">
        <h3 class="card-title">Bienvenido a Parkiapp</h3>
    </div>
    <div class="card-body">
        <p>¡Comienza ahora!</p>
        <p>Equipo Parkiapp</p>
    </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Dashboard"); </script>
@stop
