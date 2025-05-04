@extends('layouts.app')
@section('title','Finanzas')
@section('content')
<div class="grid grid-cols-2 gap-6 animate-fadeIn">
  <div class="bg-gradient-to-r from-green-100 to-green-200 rounded-xl shadow p-4">
    <h3 class="text-gray-600">💰 Ingresos Totales</h3>
    <p class="text-2xl font-bold text-green-800">${{ number_format($totalIncome, 2) }}</p>
  </div>
  <div class="bg-gradient-to-r from-red-100 to-red-200 rounded-xl shadow p-4">
    <h3 class="text-gray-600">🔖 Comisiones</h3>
    <p class="text-2xl font-bold text-red-800">${{ number_format($commission, 2) }}</p>
  </div>
</div>

<div class="mt-6 text-center">
  <h2 class="font-semibold mb-2">📄 Reportes Mensuales</h2>
  <a href="{{ route('ofertante.finances.download','pdf') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full shadow hover:bg-blue-700 transition">Descargar PDF</a>
</div>
@endsection
