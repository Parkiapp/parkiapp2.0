@extends('layouts.app')
@section('content')
  <h2 class="text-2xl mb-4">Nueva Solicitud / Queja</h2>
  <form method="POST" action="{{ route('parkidor.pqrs.store') }}" enctype="multipart/form-data">
    @csrf
    <input name="subject" placeholder="Asunto" class="border p-2 w-full mb-2">
    @error('subject')<div class="text-red-600">{{ \$message }}</div>@enderror
    <select name="type" class="border p-2 w-full mb-2">
      <option value="">Tipo</option>
      @foreach(['solicitud','queja','reclamo','sugerencia'] as \$t)
        <option value="{{ \$t }}">{{ ucfirst(\$t) }}</option>
      @endforeach
    </select>
    @error('type')<div class="text-red-600">{{ \$message }}</div>@enderror
    <textarea name="message" rows="4" class="border p-2 w-full mb-2" placeholder="Tu mensaje..."></textarea>
    @error('message')<div class="text-red-600">{{ \$message }}</div>@enderror
    <input type="file" name="attachment" class="mb-4">
    @error('attachment')<div class="text-red-600">{{ \$message }}</div>@enderror
    <button class="btn-primary">Enviar</button>
  </form>
@endsection
