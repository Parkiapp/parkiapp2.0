@extends('layouts.app')
@section('title','Gestión de Espacios')
@section('content')

<div class="flex justify-between items-center animate-slideUp">
  <h2 class="text-xl font-semibold">Mis Parqueaderos</h2>
  <a href="{{ route('ofertante.spaces.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-full">+ Añadir Espacio</a>
</div>

<table class="w-full mt-4 shadow rounded-lg overflow-hidden">
  <thead class="bg-gray-100 text-gray-600">
    <tr>
      <th class="p-3">Nombre</th>
      <th class="p-3">Precio/h</th>
      <th class="p-3">Estado</th>
      <th class="p-3">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($spaces as $space)
    <tr class="bg-white hover:bg-gray-50 transition">
      <td class="p-3">{{ $space->name }}</td>
      <td class="p-3">${{ number_format($space->price, 2) }}</td>
      <td class="p-3">{{ $space->availability ? '🟢 Activo' : '🔴 Inactivo' }}</td>
      <td class="p-3 space-x-3">
        <a href="{{ route('ofertante.spaces.edit', $space->id) }}" class="text-blue-500 hover:underline">Editar</a>
        <form action="{{ route('ofertante.spaces.destroy', $space->id) }}" method="POST" class="inline-block">
          @csrf @method('DELETE')
          <button onclick="return confirm('¿Eliminar espacio?');" class="text-red-500 hover:underline">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
