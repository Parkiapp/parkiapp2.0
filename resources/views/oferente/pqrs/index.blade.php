@extends('layouts.app')
@section('content')
  <h2 class="text-2xl mb-4">Casos PQRS</h2>
  <ul class="space-y-2">
    @foreach(\$cases as \$case)
      <li class="p-4 bg-white rounded shadow">
        <a href="{{ route('oferente.pqrs.show', \$case) }}" class="font-semibold">{{ \$case->subject }} ({{ ucfirst(\$case->status) }})</a>
        <div class="text-sm text-gray-600">{{ \$case->created_at->diffForHumans() }}</div>
      </li>
    @endforeach
  </ul>
  {{ \$cases->links() }}
@endsection
