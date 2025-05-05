@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl p-8 shadow-lg">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Historial de reservas</h2>
  <div class="grid md:grid-cols-3 gap-4 mb-6">
    <select class="p-3 border rounded-md shadow-sm" @change="/* fetch nuevos resultados */">
      <option value="">Estado (todos)</option>
      <option>Confirmadas</option><option>Completadas</option><option>Canceladas</option>
    </select>
    <input type="date" class="p-3 border rounded-md shadow-sm">
    <input type="date" class="p-3 border rounded-md shadow-sm">
  </div>
  <ul>
    @foreach($reservas as $res)
    <li class="bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition mb-4 p-4">
      <div class="flex justify-between">
        <div>
          <h4 class="font-semibold">{{ $res->place->name }}</h4>
          <span class="text-gray-600">{{ $res->starts_at->format('d/m/Y H:i') }}</span>
        </div>
        <a href="{{ route('parkidor.history.show', $res) }}" class="text-purple-500 hover:text-purple-700">
          Ver detalle
        </a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
@endsection
