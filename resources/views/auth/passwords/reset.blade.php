@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto p-8 bg-white rounded-xl shadow-2xl">
  <h2 class="text-3xl font-bold text-purple-700 mb-6 text-center">Restablecer contraseña</h2>
  <form x-data="{ token: '{{ $token }}', email: '{{ old('email') }}', password: '', password_confirmation: '', errors: {} }"
        @submit.prevent="
          errors.email = email ? '' : 'Correo requerido';
          errors.password = password.length >= 8 ? '' : 'Mínimo 8 caracteres';
          errors.password_confirmation = password === password_confirmation ? '' : 'Las contraseñas no coinciden';
          if (!errors.email && !errors.password && !errors.password_confirmation) $el.submit()
        " method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" :value="token">
    <label class="font-medium text-gray-700">Correo Electrónico</label>
    <input x-model="email" type="email" name="email"
           class="mt-1 w-full border border-purple-300 rounded-md p-3 shadow-sm">
    <p x-show="errors.email" class="text-red-500 mt-2 text-sm" x-text="errors.email"></p>

    <label class="font-medium text-gray-700 mt-4">Nueva Contraseña</label>
    <input x-model="password" type="password" name="password"
           class="mt-1 w-full border border-purple-300 rounded-md p-3 shadow-sm">
    <p x-show="errors.password" class="text-red-500 mt-2 text-sm" x-text="errors.password"></p>

    <label class="font-medium text-gray-700 mt-4">Confirmar Contraseña</label>
    <input x-model="password_confirmation" type="password" name="password_confirmation"
           class="mt-1 w-full border border-purple-300 rounded-md p-3 shadow-sm">
    <p x-show="errors.password_confirmation" class="text-red-500 mt-2 text-sm" x-text="errors.password_confirmation"></p>

    <button type="submit"
            class="mt-6 w-full py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-md shadow transition transform hover:scale-105">
      Restablecer contraseña
    </button>
  </form>
</div>
@endsection
