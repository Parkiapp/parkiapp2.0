@extends('layouts.app')
@section('title','Dashboard Oferente')
@section('content')

<div class="grid grid-cols-3 gap-6 animate-fadeIn">
  @php
    $kpis = [
      ['label' => 'Ingresos Hoy', 'value' => '$' . number_format($incomeToday, 2)],
      ['label' => 'Reservas Activas', 'value' => $activeBookings],
      ['label' => 'Calificación Promedio', 'value' => number_format($rating, 1) . ' ★']
    ];
  @endphp

  @foreach($kpis as $kpi)
  <div class="bg-gradient-to-r from-purple-100 to-purple-200 shadow-xl rounded-xl p-4">
    <h3 class="text-gray-600">{{ $kpi['label'] }}</h3>
    <p class="text-2xl font-bold text-[#531975]">{{ $kpi['value'] }}</p>
  </div>
  @endforeach
</div>

<div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg shadow">
  <h2 class="font-semibold">⚠️ Alertas Recientes</h2>
  <ul>
    @foreach($notifications as $note)
      <li class="py-1">{{ $note->message }}</li>
    @endforeach
  </ul>
</div>

@endsection
