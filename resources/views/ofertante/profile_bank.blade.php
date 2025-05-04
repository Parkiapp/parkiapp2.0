@extends('layouts.app')
@section('title','Perfil Bancario')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-lg animate-slideUp">
  <h2 class="text-2xl font-bold text-[#531975] mb-4">🏦 Datos Bancarios</h2>
  <form action="{{ route('ofertante.bank.update') }}" method="POST" class="space-y-4">
    @csrf @method('PUT')
    <div>
      <label class="text-gray-700">Banco</label>
      <input type="text" name="bank" value="{{ $bank->name }}" class="w-full p-2 border rounded mt-1">
    </div>
    <div>
      <label class="text-gray-700">Número de Cuenta</label>
      <input type="text" name="account" value="{{ $bank->account }}" class="w-full p-2 border rounded mt-1">
    </div>
    <button class="w-full py-2 bg-purple-dark text-white rounded-lg hover:bg-purple-600 transition">Guardar Cambios</button>
  </form>
</div>
@endsection
