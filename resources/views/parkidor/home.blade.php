@extends('layouts.app')
@section('title','Inicio')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div class="space-y-8 p-4 max-w-2xl mx-auto" data-aos="fade-up">
  <div id="map" class="h-72 rounded-xl shadow"></div>

  <form action="{{ route('parkidor.search') }}" class="flex space-x-3">
    <input name="q" type="text" placeholder="Buscar dirección..." class="flex-grow p-3 border rounded-full focus:ring-2 focus:ring-[#731176]">
    <button class="bg-[#731176] text-white px-5 rounded-full hover:bg-[#531975] transition">Buscar</button>
  </form>

  <h2 class="text-xl font-semibold text-[#531975]">Sugerencias para ti</h2>
  <div class="grid grid-cols-2 gap-4">
    @foreach($suggestions as $place)
      <a href="{{ route('parkidor.confirm',['id'=>$place->id]) }}" class="bg-white p-4 rounded-xl shadow hover:scale-105 transition">
        <h3 class="font-semibold">{{ $place->name }}</h3>
        <p class="text-sm text-gray-600">{{ $place->distance }} m</p>
      </a>
    @endforeach
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  AOS.init();
  L.map('map').setView([{{ $lat }}, {{ $lng }}], 13)
    .addLayer(L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));
});
</script>
@endsection
