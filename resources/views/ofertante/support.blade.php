@extends('layouts.app')
@section('title','Soporte y PQRS')
@section('content')
<div class="max-w-xl mx-auto space-y-6 animate-slideUp">
  <div class="bg-white rounded-xl shadow p-6">
    <h3 class="font-bold text-[#531975]">📝 Crear Ticket</h3>
    <form action="{{ route('ofertante.support.submit') }}" method="POST" class="space-y-4 mt-4">
      @csrf
      <input name="subject" placeholder="Asunto" required class="w-full border rounded p-2"/>
      <textarea name="message" placeholder="Detalles" required class="w-full border rounded p-2 h-32"></textarea>
      <button class="bg-purple-dark text-white rounded px-4 py-2 w-full">Enviar</button>
    </form>
  </div>
  <div class="bg-gray-50 rounded-xl shadow p-4">
    <h3 class="font-semibold mb-2">📑 Historial</h3>
    <ul class="space-y-2">
      @foreach($tickets as $ticket)
      <li class="flex justify-between items-center bg-white rounded p-2 shadow">
        <span>{{ $ticket->subject }} <small>({{ $ticket->status }})</small></span>
        <a href="{{ route('ofertante.support.view', $ticket->id) }}" class="text-blue-500">Ver</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
