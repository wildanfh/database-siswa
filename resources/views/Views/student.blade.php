@extends('app')

@section('content')
<section>
  <div class="container mx-auto">
    <h2 class="text-slate-700 font-semibold text-2xl">Students</h2>
    <div class="mb-4 mt-3" x-data="{ showSearch: false }">
      <button @click="showSearch = !showSearch" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline text-sm mb-2">
        Search
      </button>
      <form x-show="showSearch" id="search-form" action="{{ route('views.unit.group.student', ['category' => $category, 'unit' => $unit, 'group' => $group]) }}" method="GET" class="flex h-8">
        <input type="text" name="search" placeholder="Search by student" class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 text-sm focus:outline-none focus:shadow-outline">
        <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-2 ml-2 rounded focus:outline-none focus:shadow-outline text-sm">
          Search
        </button>
      </form>
    </div>
    @if($students->isEmpty())
    <p class="text-gray-700 leading-tight">No Data found.</p>
    @else

    <div class="min-w-full">
      <div class="bg-gray-50 overflow-hidden sm:rounded-lg">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  No
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Kategori
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Kelas
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Tahun Masuk
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  NIS
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Nama
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Action
                </th>

              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($students as $i => $student)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $i + 1 }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $student->category->category }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $student->group->group ?? '' }}
                  {{ $student->group->unit->unit ?? '' }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $student->entryYear->entry_year ?? '' }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $student->nis }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $student->nama_siswa }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="{{ route('students.show', $student->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    @endif
    {{ $students->links() }}
  </div>
  @if (session('success'))
  <div id="success-notification" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
    <span id="success-close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <title>Close</title>
        <path d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L10 9.414l-2.93 2.93a.999.999 0 1 0 1.414 1.414L11.414 11l2.93 2.93a.999.999 0 1 0 1.414-1.414L12.828 11l2.52-2.52z" />
      </svg>
    </span>
  </div>
  @endif
</section>
@endsection
