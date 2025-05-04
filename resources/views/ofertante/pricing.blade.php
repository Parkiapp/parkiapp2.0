@extends('layouts.app')
@section('title','Smart Pricing')
@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow animate-fadeInUp">
  <h2 class="font-semibold text-xl text-[#531975]">📈 Smart Pricing Automático</h2>
  <label class="flex items-center mt-4 space-x-2">
    <input type="checkbox" onchange="togglePricing(this)" {{ $smartPricing ? 'checked' : '' }}>
    <span>Activar</span>
  </label>
  <div id="pricing-details" class="{{ $smartPricing ? 'block' : 'hidden' }} mt-4 text-gray-600">
    <p>Ajustamos tu tarifa entre <strong>${{ number_format($minPrice,2) }}</strong> y <strong>${{ number_format($maxPrice,2) }}</strong> para maximizar tus ganancias.</p>
    <a href="{{ route('ofertante.pricing.history') }}" class="text-blue-500 underline">Ver histórico</a>
  </div>
</div>

<script>
function togglePricing(el){
  fetch('{{ route('ofertante.pricing.toggle') }}',{
    method:'POST',
    headers:{'X-CSRF-TOKEN':'{{ csrf_token() }}'},
    body:new URLSearchParams({smart_pricing:el.checked})
  }).then(()=>location.reload());
}
</script>

@endsection
