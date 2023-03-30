@extends('app')

@section('content')
<div class="container mx-auto">
  <h1 class="text-2xl font-bold mb-4">Create Groups</h1>
  <form method="POST" action="{{ route('groups.store') }}" class="max-w-lg">
    @csrf
    <div class="mb-4">
      <label for="group" class="block text-gray-700 text-large font-bold mb-2">Group :</label>
      <input type="text" name="group" id="group" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter group">
      @error('group')
        <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label for="unit" class="block text-gray-700 text-large font-bold mb-2">Unit :</label>
      <select name="unit_id" id="unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline">
        @foreach($units as $unit)
          <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
        @endforeach
      </select>
      @error('unit_id')
        <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline text-base">
        Create
      </button>
      <a href="{{ route('groups.index') }}" class="text-gray-600 hover:text-gray-800 text-base">Cancel</a>
    </div>
  </form>
</div>
@endsection
