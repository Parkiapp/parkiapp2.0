@extends('layouts.app')
@section('title','Configuración')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-lg animate-slideUp">
  <h2 class="font-bold text-xl text-[#531975]">⚙️ Ajustes</h2>
  <form action="{{ route('ofertante.settings.update') }}" method="POST" class="mt-4 space-y-3">
    @csrf @method('PUT')
    <label class="flex items-center space-x-2">
      <input type="checkbox" name="notifications" {{ auth()->user()->notifications ? 'checked' : '' }}>
      <span>Notificaciones Push</span>
    </label>
    <label class="flex items-center space-x-2">
      <input type="checkbox" name="geolocation" {{ auth()->user()->geolocation ? 'checked' : '' }}>
      <span>Geolocalización</span>
    </label>
    <button class="bg-purple-dark text-white rounded px-4 py-2 w-full">Guardar</button>
  </form>
  <form action="{{ route('ofertante.account.delete') }}" method="POST" class="mt-4">
    @csrf @method('DELETE')
    <button onclick="return confirm('¿Eliminar cuenta?');" class="bg-red-500 text-white rounded px-4 py-2 w-full">Eliminar Cuenta</button>
  </form>
</div>
@endsection
