@extends('layouts.app')
@section('content')
  <div class="max-w-3xl mx-auto p-4 space-y-4">
    <h1 class="text-2xl font-bold">Historial de Reservas</h1>
    <form method="GET" class="flex space-x-2">
      <select name="status" class="border p-1 rounded">
        <option value="">-- Estado --</option>
        <option value="confirmed" @if(request('status')=='confirmed') selected @endif>Confirmadas</option>
        <option value="cancelled" @if(request('status')=='cancelled') selected @endif>Canceladas</option>
        <option value="completed" @if(request('status')=='completed') selected @endif>Completadas</option>
      </select>
      <input type="date" name="from" value="{{ request('from') }}" class="border p-1 rounded"/>
      <input type="date" name="to"   value="{{ request('to') }}"   class="border p-1 rounded"/>
      <button type="submit" class="bg-purple-600 text-white px-3 rounded">Filtrar</button>
    </form>
    <ul class="space-y-2">
      @forelse($reservas as $r)
        <li class="p-4 border rounded flex justify-between items-center">
          <div>
            <div class="font-semibold">{{ $r->parqueadero->name }} – {{ $r->starts_at->format('d/m/Y H:i') }}</div>
            <div class="text-sm text-gray-600">Estado: {{ ucfirst($r->status) }} | ${{ number_format($r->price,2) }}</div>
          </div>
          <a href="{{ route('parkidor.history.show', $r) }}" class="text-purple-600">Ver detalle</a>
        </li>
      @empty
        <li>No hay reservas.</li>
      @endforelse
    </ul>
    {{ $reservas->withQueryString()->links() }}
  </div>
@endsection
