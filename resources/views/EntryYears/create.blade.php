@extends('app')

@section('content')
<div class="container mx-auto">
  <h1 class="text-2xl font-bold mb-4">Create Tahun Masuk</h1>
  <form method="POST" action="{{ route('entryYears.store') }}" class="max-w-lg">
    @csrf
    <div class="mb-4">
      <label for="entry_year" class="block text-gray-700 text-large font-bold mb-2">Tahun Masuk :</label>
      <input type="text" name="entry_year" id="entry_year" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter Tahun Masuk">
      @error('entry_year')
        <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline text-base">
        Create
      </button>
      <a href="{{ route('entryYears.index') }}" class="text-gray-600 hover:text-gray-800 text-base">Cancel</a>
    </div>
  </form>
</div>
@endsection
