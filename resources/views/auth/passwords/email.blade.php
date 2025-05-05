@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto p-8 bg-white rounded-xl shadow-2xl">
  <h2 class="text-3xl font-bold text-purple-700 mb-6 text-center">¿Olvidaste tu contraseña?</h2>
  <form x-data="{ email: '', errors: {} }"
        @submit.prevent="
          errors.email = email ? '' : 'Por favor ingresa tu correo.';
          if (!errors.email) $el.submit()
        " method="POST" action="{{ route('password.email') }}">
    @csrf
    <label class="font-medium text-gray-700">Correo Electrónico</label>
    <input x-model="email" type="email" name="email"
           class="mt-1 w-full border border-purple-300 rounded-md p-3 shadow-sm focus:ring-purple-500 focus:border-purple-500"
           placeholder="usuario@ejemplo.com">
    <p x-show="errors.email" class="text-red-500 mt-2 text-sm" x-text="errors.email"></p>
    <button type="submit"
            class="mt-6 w-full py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-md shadow transition duration-300 ease-in-out transform hover:scale-105">
      Enviar enlace de recuperación
    </button>
  </form>
</div>
@endsection
