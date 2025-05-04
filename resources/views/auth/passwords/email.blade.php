@extends('layouts.app')
@section('content')
  <div class="max-w-md mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-xl font-semibold mb-4">¿Olvidaste tu contraseña?</h1>
    <form method="POST" action="{{ route('password.email') }}">
      @csrf
      <label class="block mb-2">Correo electrónico</label>
      <input type="email" name="email" class="w-full p-2 border rounded" required>
      <button type="submit" class="mt-4 w-full py-2 bg-purple-600 text-white rounded">Enviar enlace</button>
    </form>
  </div>
@endsection
