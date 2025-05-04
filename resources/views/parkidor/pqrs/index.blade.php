@extends('layouts.app')
@section('content')
  <h2 class="text-2xl mb-4">Mis Solicitudes</h2>
  <a href="{{ route('parkidor.pqrs.create') }}" class="btn-primary mb-4">Nueva PQRS</a>
  <ul class="space-y-2">
    @foreach(\$cases as \$case)
      <li class="p-4 bg-white rounded shadow">
        <a href="{{ route('parkidor.pqrs.show', \$case) }}" class="font-semibold">{{ \$case->subject }} ({{ ucfirst(\$case->status) }})</a>
        <div class="text-sm text-gray-600">{{ \$case->created_at->diffForHumans() }}</div>
      </li>
    @endforeach
  </ul>
  {{ \$cases->links() }}
@endsection
