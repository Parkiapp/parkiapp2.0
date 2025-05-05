@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-xl p-8 shadow-lg">
  <h2 class="text-3xl font-bold text-gray-800 mb-4">Mis Métodos de Pago</h2>
  <button class="mb-4 px-5 py-2 bg-green-500 hover:bg-green-600 rounded text-white shadow">
    Añadir método
  </button>
  <ul>
    @foreach($methods as $m)
    <li class="flex justify-between items-center mb-3 p-3 bg-gray-50 rounded-lg shadow-sm">
      <span>{{ $m->brand }} **** {{ $m->last4 }}</span>
      <button class="px-3 py-1 text-red-500 hover:text-red-700">Eliminar</button>
    </li>
    @endforeach
  </ul>
</div>
@endsection
