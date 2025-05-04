@extends('layouts.app')
@section('content')
  <div class="max-w-lg mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Detalle de Reserva</h1>
    <div class="space-y-2">
      <div><strong>Parqueadero:</strong> {{ $reserva->parqueadero->name }}</div>
      <div><strong>Fecha inicio:</strong> {{ $reserva->starts_at->format('d/m/Y H:i') }}</div>
      <div><strong>Fecha fin:</strong> {{ $reserva->ends_at->format('d/m/Y H:i') }}</div>
      <div><strong>Monto:</strong> ${{ number_format($reserva->price,2) }}</div>
      <form method="POST" action="{{ route('parkidor.history.store', $reserva) }}">
        @csrf
        <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded">Repetir reserva</button>
      </form>
    </div>
  </div>
@endsection
