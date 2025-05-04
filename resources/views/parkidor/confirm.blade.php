@extends('layouts.app')
@section('title','Confirmar Reserva')
@section('content')
<div class="p-4 max-w-md mx-auto">
  <h1 class="text-2xl font-bold mb-4">Confirmar Reserva</h1>
  <form id="booking-form">
    <input type="hidden" name="place_id" value="{{ \$placeId }}">
    <div class="mb-2">
      <label class="block">Fecha y hora inicio</label>
      <input type="datetime-local" name="starts_at" class="w-full border p-2" required>
    </div>
    <div class="mb-2">
      <label class="block">Fecha y hora fin</label>
      <input type="datetime-local" name="ends_at" class="w-full border p-2" required>
    </div>
    <div class="mb-4">
      <label class="block">Precio estimado</label>
      <input type="text" name="price" id="price" class="w-full border p-2" readonly>
    </div>
    <button type="submit" class="bg-purple-medium text-white px-4 py-2 rounded">Reservar</button>
  </form>
  <div id="msg" class="mt-4"></div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const placeId = {{ \$placeId }};
    // Cargar precio del lugar desde microservicio
    fetch(`http://127.0.0.1:8001/api/places/${placeId}`)
      .then(res => res.json())
      .then(({data}) => {
        document.getElementById('price').value = data.price;
      });

    document.getElementById('booking-form').addEventListener('submit', async e => {
      e.preventDefault();
      const form = e.target;
      const payload = Object.fromEntries(new FormData(form).entries());
      const token = localStorage.getItem('sanctum_token');
      try {
        const res = await fetch('http://127.0.0.1:8001/api/book', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token
          },
          body: JSON.stringify(payload)
        });
        const json = await res.json();
        document.getElementById('msg').innerText = json.message || 'Reserva completada';
      } catch (err) {
        document.getElementById('msg').innerText = 'Error al reservar';
        console.error(err);
      }
    });
  });
</script>
@endsection
