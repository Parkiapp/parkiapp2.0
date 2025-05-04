@extends('layouts.app')
@section('content')
  <form method="POST" action="{{ route('password.update') }}" class="max-w-md mx-auto p-4">
    @csrf
    <input type="hidden" name="token" value="{{ \$token }}">
    <h1 class="text-2xl font-bold mb-4">Ingresa nueva contraseña</h1>
    <input name="email" type="email" required placeholder="Tu correo" class="w-full p-2 border rounded mb-2"/>
    @error('email')<div class="text-red-600">{{ \$message }}</div>@enderror
    <input name="password" type="password" required placeholder="Nueva contraseña" class="w-full p-2 border rounded mb-2"/>
    @error('password')<div class="text-red-600">{{ \$message }}</div>@enderror
    <input name="password_confirmation" type="password" required placeholder="Confirmar contraseña" class="w-full p-2 border rounded mb-4"/>
    <button type="submit" class="w-full py-2 bg-purple-600 text-white rounded">Restablecer</button>
  </form>
@endsection
