@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-xl p-8 shadow-lg">
  <h2 class="text-3xl font-bold text-gray-800 mb-4">Mis Vehículos</h2>
  <button class="mb-4 px-5 py-2 bg-green-500 hover:bg-green-600 rounded text-white shadow">
    + Añadir vehículo
  </button>
  <ul>
    @foreach($vehicles as $v)
    <li class="flex justify-between items-center mb-3 p-3 bg-gray-50 rounded-lg shadow-sm">
      <span>{{ $v->make }} {{ $v->model }} ({{ $v->plate }})</span>
      <button class="px-3 py-1 text-red-500 hover:text-red-700">Eliminar</button>
    </li>
    @endforeach
  </ul>
</div>
@endsection
