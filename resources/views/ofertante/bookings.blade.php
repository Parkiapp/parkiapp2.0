@extends('layouts.app')
@section('title','Reservas')
@section('content')
<h2 class="text-2xl font-bold text-[#531975] mb-4">📅 Reservas Recientes</h2>

<div class="space-y-4">
  @forelse($bookings as $booking)
    <div class="flex justify-between items-center bg-white rounded-xl shadow p-4">
      <div>
        <p><strong>Cliente:</strong> {{ $booking->user->name }}</p>
        <p><strong>Parqueadero:</strong> {{ $booking->space->name }}</p>
        <p><strong>Hora:</strong> {{ $booking->datetime->format('d/m/Y H:i') }}</p>
      </div>
      <div class="flex space-x-2">
        @if($booking->status == 'pending')
          <form action="{{ route('ofertante.bookings.update', $booking->id) }}" method="POST">
            @csrf @method('PATCH')
            <button name="status" value="confirmed" class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">Confirmar</button>
          </form>
        @endif
        <a href="{{ route('ofertante.bookings.show', $booking->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Detalles</a>
      </div>
    </div>
  @empty
    <p>No tienes reservas recientes.</p>
  @endforelse
</div>
@endsection
