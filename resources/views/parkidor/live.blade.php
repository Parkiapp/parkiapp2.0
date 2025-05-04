@extends('layouts.app')
@section('title','En Ruta')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div id="map" class="h-96 rounded-xl shadow-lg border border-gray-200"></div>
<button id="to-waze" class="mt-4 bg-[#731176] text-white px-6 py-2 rounded-full">Ir con Waze 🚗</button>

<script>
document.addEventListener('DOMContentLoaded', () => {
  L.map('map').setView([{{ $lat }}, {{ $lng }}], 16)
    .addLayer(L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));

  document.getElementById('to-waze').onclick = () =>
    location.href=`waze://?ll={{ $lat }},{{ $lng }}&navigate=yes`;
});
</script>
@endsection
