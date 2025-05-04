@extends('layouts.app')
@section('title','Documentos Legales')
@section('content')
<div class="space-y-6 animate-fadeIn">
  @foreach([
    ['title' => 'Términos y Condiciones', 'file' => 'TERMINOS_Y_CONDICIONES_PARKIAPP_OFERENTES.pdf'],
    ['title' => 'Política de Privacidad', 'file' => 'PRIVACY_POLICY.pdf']
  ] as $doc)
    <div class="bg-white rounded-xl shadow p-4">
      <h3 class="font-semibold mb-2">{{ $doc['title'] }}</h3>
      <iframe src="{{ asset('docs/'.$doc['file']) }}" class="w-full h-72 rounded border"></iframe>
    </div>
  @endforeach
</div>
@endsection
