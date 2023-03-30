@extends('app')

@section('content')
<div class="container mx-auto">
  <h1 class="text-2xl font-bold mb-4">Edit Tahun Masuk</h1>
  <form method="POST" action="{{ route('entryYears.update', ['entryYear' => $entryYear->id]) }}" class="max-w-lg">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label for="entryYear" class="block text-gray-700 text-large font-bold mb-2">Tahun Masuk :</label>
      <input type="text" name="entryYear" id="entryYear" value="{{ $entryYear->entry_year }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter Tahun Masuk">
      @error('entryYear')
        <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline text-base">
        Update
      </button>
      <a href="{{ route('entryYears.index') }}" class="text-gray-600 hover:text-gray-800 text-base">Cancel</a>
    </div>
  </form>
</div>

@endsection
