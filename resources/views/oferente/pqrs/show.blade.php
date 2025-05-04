@extends('layouts.app')
@section('content')
  <h2 class="text-2xl mb-4">{{ \$pqr->subject }}</h2>
  <p><strong>Tipo:</strong> {{ ucfirst(\$pqr->type) }}</p>
  <p><strong>Estado:</strong> {{ ucfirst(\$pqr->status) }}</p>
  <p class="mt-4">{{ \$pqr->message }}</p>
  @if(\$pqr->attachment)
    <a href="{{ Storage::url(\$pqr->attachment) }}" class="text-blue-600">Ver adjunto</a>
  @endif
@endsection
