@extends('layouts.app')
@section('content')
  <div class="max-w-md mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-xl font-semibold mb-4">Restablecer contraseña</h1>
    <form method="POST" action="{{ route('password.update') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <label class="block mb-2">Correo electrónico</label>
      <input type="email" name="email" class="w-full p-2 border rounded" required>
      <label class="block mt-4 mb-2">Nueva contraseña</label>
      <input type="password" name="password" class="w-full p-2 border rounded" required>
      <label class="block mt-4 mb-2">Confirmar contraseña</label>
      <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
      <button type="submit" class="mt-6 w-full py-2 bg-purple-600 text-white rounded">Restablecer</button>
    </form>
  </div>
@endsection
