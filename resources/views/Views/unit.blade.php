@extends('app')

@section('content')
<h1 class="text-2xl font-semibold">Unit</h1>
<div class=" flex justify-center items-center min-h-4/5">
  <div class="flex flex-wrap">
    @foreach($units as $unit)
    <a href="{{ route('views.unit.group', ['category' => $category, 'unit' => $unit->unit]) }}" class="flex items-center bg-slate-200 rounded-lg shadow-lg overflow-hidden mx-4 my-4 px-6 py-2 hover:bg-gray-400 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 36px; height: 36px;">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
      </svg>

      <div class="px-4 py-2 text-gray-800">
        <h2 class="font-semibold text-2xl mb-2">{{ $unit->unit }}</h2>
      </div>
    </a>
    @endforeach
  </div>
</div>

@endsection
