@extends('layouts.app')
@section('title','Buscar Parqueadero')
@section('content')
<div id="map" class="h-screen"></div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Inicializa el mapa
    const map = L.map('map').setView([4.6486, -74.0859], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Busca tu geolocación
    navigator.geolocation.getCurrentPosition(({coords}) => {
      const {latitude, longitude} = coords;
      fetch(`http://127.0.0.1:8001/api/search?lat=${latitude}&lng=${longitude}&radius=10`)
        .then(res => res.json())
        .then(({data}) => {
          data.forEach(p => {
            L.marker([p.latitude, p.longitude])
              .addTo(map)
              .bindPopup(\`<strong>\${p.name}</strong><br>\${p.address}<br>\$ \${p.price}\`);
          });
          map.setView([latitude, longitude], 13);
        }).catch(console.error);
    }, () => {
      // Fallback sin geolocalización
      fetch('http://127.0.0.1:8001/api/search?lat=4.6486&lng=-74.0859&radius=10')
        .then(res => res.json())
        .then(({data}) => {
          data.forEach(p => {
            L.marker([p.latitude, p.longitude])
              .addTo(map)
              .bindPopup(\`<strong>\${p.name}</strong><br>\${p.address}<br>\$ \${p.price}\`);
          });
        }).catch(console.error);
    });
  });
</script>
@endsection
