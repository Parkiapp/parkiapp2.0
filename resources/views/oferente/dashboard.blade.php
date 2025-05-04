@extends('layouts.app')
@section('content')
<canvas id="revenueChart" width="400" height="200"></canvas>
<script>
  fetch('http://127.0.0.1:8001/api/bookings', {
    headers: { 'Authorization':'Bearer '+localStorage.getItem('sanctum_token') }
  })
    .then(res=>res.json())
    .then(({data}) => {
      const labels = data.map(b=>new Date(b.starts_at).toLocaleDateString());
      const values = data.map(b=>parseFloat(b.price));
      new Chart(document.getElementById('revenueChart').getContext('2d'), {
        type: 'bar',
        data: { labels, datasets: [{ label: 'Ingresos por reserva', data: values }] },
      });
    });
</script>
@endsection
