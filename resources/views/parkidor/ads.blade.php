@extends('layouts.app')
@section('title','Promociones')
@section('content')

<div class="grid gap-6 p-4 max-w-xl mx-auto">
  @foreach($ads as $ad)
    <div class="bg-white rounded-xl overflow-hidden shadow">
      <img src="{{ $ad->image_url }}" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold">{{ $ad->title }}</h3>
        <p class="text-gray-600">{{ $ad->description }}</p>
      </div>
    </div>
  @endforeach
</div>

@endsection
