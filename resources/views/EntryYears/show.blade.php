@extends('app')

@section('content')
<div class="container mx-auto">
  <div class="bg-white rounded-lg shadow-md p-6">
    <a href="{{ route('entryYears.index') }}" class="text-gray-600 hover:text-gray-800 text-lg">&laquo; Back</a>
    <h2 class="text-2xl font-semibold my-4 bg-white rounded-lg shadow-md p-3 w-fit bg-gray-200">{{ $entryYear->id }}</h2>
    <div class="bg-gray-100 p-4 rounded-md">
      <h2 class="text-xl font-semibold mb-2">Tahun Masuk: {{ $entryYear->entry_year }}</h2>
    </div>
  </div>
</div>
@endsection
