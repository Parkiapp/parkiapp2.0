@extends('layouts.app')
@section('title','Perfil')
@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow-lg">
  <h2 class="text-xl font-bold text-[#531975] mb-4">Mi Perfil</h2>
  <form action="{{ route('parkidor.profile.update') }}" method="POST">
    @csrf @method('PUT')
    <input name="name" value="{{ auth()->user()->name }}" class="w-full p-3 border rounded-lg mb-2" required>
    <input type="email" value="{{ auth()->user()->email }}" class="w-full p-3 border rounded-lg mb-2" readonly>
    <button class="w-full bg-[#731176] text-white py-2 rounded-full transition">Guardar</button>
  </form>
</div>
@endsection
