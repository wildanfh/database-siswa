@extends('app')

@section('content')
<div class="container mx-auto">
  <div class="bg-white rounded-lg shadow-md p-6">
    <a href="{{ route('groups.index') }}" class="text-gray-600 hover:text-gray-800 text-lg">&laquo; Back</a>
    <h2 class="text-2xl font-semibold my-4 bg-white rounded-lg shadow-md p-3 w-fit bg-gray-200">{{ $group->id }}</h2>
    <div class="bg-gray-100 p-4 rounded-md">
      <h2 class="text-xl font-semibold mb-2">Group: {{ $group->group }}</h2>
      <p class="text-xl font-semibold mb-2">Unit: {{ $group->unit->unit }}</p>
    </div>
  </div>
</div>
@endsection
