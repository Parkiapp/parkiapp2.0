@extends('layouts.app')
@section('content')
  <form method="POST" action="{{ route('password.email') }}" class="max-w-md mx-auto p-4">
    @csrf
    <h1 class="text-2xl font-bold mb-4">¿Olvidaste tu contraseña?</h1>
    @if(session('status'))<div class="bg-green-100 p-2 mb-4">{{ session('status') }}</div>@endif
    <input name="email" type="email" required placeholder="Tu correo" class="w-full p-2 border rounded mb-2"/>
    @error('email')<div class="text-red-600">{{ $message }}</div>@enderror
    <button type="submit" class="w-full py-2 bg-purple-600 text-white rounded">Enviar enlace</button>
  </form>
@endsection
