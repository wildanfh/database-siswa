@extends('app')

@section('content')
<h1 class="text-2xl font-semibold">Group</h1>
<div class=" flex justify-center items-center min-h-4/5">
  <div class="flex flex-wrap">
    @foreach($groups as $group)
    <a href="{{ route('views.unit.group.student', ['category' => $category, 'unit' => $unit, 'group' => $group->group]) }}" class="flex items-center bg-slate-200 rounded-lg shadow-lg overflow-hidden mx-4 my-4 px-6 py-2 hover:bg-gray-400 transition duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 36px; height: 36px;">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
  </svg>

      <div class="px-4 py-2 text-gray-800">
        <h2 class="font-semibold text-2xl mb-2">{{ $group->group }}</h2>
      </div>
    </a>
    @endforeach
  </div>
</div>

@endsection
