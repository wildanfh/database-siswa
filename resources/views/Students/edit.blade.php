@extends('app')

@section('content')
<div class="container mx-auto">
  <h1 class="text-2xl font-bold mb-4">Edit Student</h1>
  <form method="POST" action="{{ route('students.update', $student->id) }}" class="max-w-full flex flex-wrap gap-2">
    @csrf
    @method('PUT')
    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="category_id" class="block text-gray-700 text-large font-bold mb-2">Category :</label>
      <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $category->id == $student->category_id ? 'selected' : '' }}>{{ $category->category }}</option>
        @endforeach
      </select>
      @error('category_id')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="group_id" class="block text-gray-700 text-large font-bold mb-2">Kelas :</label>
      <select name="group_id" id="group_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline">
        @foreach($groups as $group)
        <option value="{{ $group->id }}">{{ $group->group }} {{ $group->unit->unit }}</option>
        @endforeach
      </select>
      @error('group_id')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="entry_year_id" class="block text-gray-700 text-large font-bold mb-2">Tahun Masuk :</label>
      <select name="entry_year_id" id="entry_year_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline">
        @foreach($entryYears as $entryYear)
        <option value="{{ $entryYear->id }}">{{ $entryYear->entry_year }}</option>
        @endforeach
      </select>
      @error('entry_year_id')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nisn" class="block text-gray-700 text-large font-bold mb-2">NISN :</label>
      <input type="text" name="nisn" id="nisn" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nisn" value="{{ $student->nisn }}">
      @error('nisn')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nis" class="block text-gray-700 text-large font-bold mb-2">NIS :</label>
      <input type="text" name="nis" id="nis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nis" value="{{ $student->nis }}">
      @error('nis')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nik" class="block text-gray-700 text-large font-bold mb-2">NIK :</label>
      <input type="text" name="nik" id="nik" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nik" value="{{ $student->nik }}">
      @error('nik')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="no_akta" class="block text-gray-700 text-large font-bold mb-2">No Akta :</label>
      <input type="text" name="no_akta" id="no_akta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter no akta" value="{{ $student->no_akta }}">
      @error('no_akta')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nama_siswa" class="block text-gray-700 text-large font-bold mb-2">Nama :</label>
      <input type="text" name="nama_siswa" id="nama_siswa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nama" value="{{ $student->nama_siswa }}">
      @error('nama_siswa')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="panggilan" class="block text-gray-700 text-large font-bold mb-2">Nama Panggilan :</label>
      <input type="text" name="panggilan" id="panggilan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nama panggilan" value="{{ $student->panggilan }}">
      @error('panggilan')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="jenis_kelamin" class="block text-gray-700 text-large font-bold mb-2">Jenis Kelamin :</label>
      <select name="jenis_kelamin" id="jenis_kelamin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" value="{{ $student->jenis_kelamin }}">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      @error('jenis_kelamin')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <div class="flex items-center">
        <label for="tpa" class="block text-gray-700 text-large font-bold mb-2 mr-2">TPA? :</label>
        <input type="checkbox" name="tpa" id="tpa" class="form-checkbox h-5 w-5 text-gray-600 cursor-pointer"  value="1" {{ $student->tpa ? 'checked' : '' }}>
      </div>
      @error('tpa')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="tempat_lahir" class="block text-gray-700 text-large font-bold mb-2">Tempat Lahir :</label>
      <input type="text" name="tempat_lahir" id="tempat_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter tempat lahir" value="{{ $student->tempat_lahir }}">
      @error('tempat_lahir')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="tanggal_lahir" class="block text-gray-700 text-large font-bold mb-2">Tanggal Lahir :</label>
      <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter tanggal lahir" value="{{ $student->tanggal_lahir }}">
      @error('tanggal_lahir')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nama_ayah" class="block text-gray-700 text-large font-bold mb-2">Nama Ayah :</label>
      <input type="text" name="nama_ayah" id="nama_ayah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nama ayah" value="{{ $student->nama_ayah }}">
      @error('nama_ayah')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="pekerjaan_ayah" class="block text-gray-700 text-large font-bold mb-2">Pekerjaan Ayah :</label>
      <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter pekerjaan ayah" value="{{ $student->pekerjaan_ayah }}">
      @error('pekerjaan_ayah')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="nama_ibu" class="block text-gray-700 text-large font-bold mb-2">Nama Ibu :</label>
      <input type="text" name="nama_ibu" id="nama_ibu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter nama ibu" value="{{ $student->nama_ibu }}">
      @error('nama_ibu')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="pekerjaan_ibu" class="block text-gray-700 text-large font-bold mb-2">Pekerjaan Ibu :</label>
      <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter pekerjaan ibu" value="{{ $student->pekerjaan_ibu }}">
      @error('pekerjaan_ibu')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="alamat" class="block text-gray-700 text-large font-bold mb-2">Alamat :</label>
      <input type="text" name="alamat" id="alamat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter alamat" value="{{ $student->alamat }}">
      @error('alamat')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="alamat_domisili" class="block text-gray-700 text-large font-bold mb-2">Alamat Domisili :</label>
      <input type="text" name="alamat_domisili" id="alamat_domisili" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter alamat domisili" value="{{ $student->alamat_domisili }}">
      @error('alamat_domisili')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4 md:basis-2/5 basis-full">
      <label for="no_telepon" class="block text-gray-700 text-large font-bold mb-2">No Telepon :</label>
      <input type="text" name="no_telepon" id="no_telepon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-base focus:outline-none focus:shadow-outline" placeholder="Enter no telepon" value="{{ $student->no_telepon }}">
      @error('no_telepon')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </div>


    <div class="flex items-center justify-between basis-4/5">
      <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline text-base">
        Update
      </button>
      <a href="{{ route('students.index') }}" class="text-gray-600 hover:text-gray-800 text-base">Cancel</a>
    </div>
  </form>
</div>
@endsection
