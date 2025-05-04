@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto py-8">
  <h1 class="text-2xl font-bold mb-6">Historial de Reservas</h1>
  <form method="GET" action="{{ route('parkidor.historial') }}" class="mb-4 flex space-x-4">
    @csrf
    <input type="date" name="from" class="p-2 border rounded" placeholder="Desde">
    <input type="date" name="to"   class="p-2 border rounded" placeholder="Hasta">
    <select name="status" class="p-2 border rounded">
      <option value="">Todos</option>
      <option value="pending">Pendientes</option>
      <option value="confirmed">Confirmadas</option>
      <option value="cancelled">Canceladas</option>
    </select>
    <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded">Filtrar</button>
  </form>
  <table class="w-full table-auto bg-white shadow rounded">
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-2">Fecha</th>
        <th class="px-4 py-2">Parqueadero</th>
        <th class="px-4 py-2">Monto</th>
        <th class="px-4 py-2">Estado</th>
        <th class="px-4 py-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {{-- Aquí recorrerás \$reservations --}}
      @forelse(\$reservations as \$res)
      <tr class="border-t">
        <td class="px-4 py-2">{{ \$res->starts_at->format('d/m/Y H:i') }}</td>
        <td class="px-4 py-2">{{ \$res->place->name }}</td>
        <td class="px-4 py-2">\${{ number_format(\$res->price,2) }}</td>
        <td class="px-4 py-2">{{ ucfirst(\$res->status) }}</td>
        <td class="px-4 py-2">
          <a href="{{ route('parkidor.reservas.repetir', \$res) }}"
             class="text-purple-600 hover:underline">Repetir</a>
        </td>
      </tr>
      @empty
      <tr><td colspan="5" class="px-4 py-2 text-center">No hay reservas</td></tr>
      @endforelse
    </tbody>
  </table>
  <div class="mt-4">
    {{ \$reservations->withQueryString()->links() }}
  </div>
</div>
@endsection
