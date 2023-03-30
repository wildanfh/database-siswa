@extends('app')

@section('content')
<div class="container mx-auto">
  <div class="bg-white rounded-lg shadow-md p-6">
    <a href="{{ route('students.index') }}" class="text-gray-600 hover:text-gray-800 text-lg">&laquo; Back</a>
    <h2 class="text-2xl font-semibold my-4 bg-white rounded-lg shadow-md p-3 w-fit bg-gray-200">{{ $student->nama_siswa }}</h2>
    <div class="bg-gray-100 p-4 rounded-md">
      <table>
        <tr>
          <td class="text-xl font-semibold mb-2">Nama Panggilan</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->panggilan }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Category</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->category->category }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">NISN</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->nisn }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">NIS</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->nis }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">NIK</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->nik }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">No. Akta</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->no_akta }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Jenis Kelamin</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">TPA</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->tpa ? 'Iya'  :   'Nggak' }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Tempat Lahir</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->tempat_lahir }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Tanggal Lahir</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->tanggal_lahir }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Nama Ayah</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->nama_ayah }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Pekerjaan Ayah</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->pekerjaan_ayah }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Nama Ibu</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->nama_ibu }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Pekerjaan Ibu</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->pekerjaan_ibu }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Alamat</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->alamat }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">Alamat Domisili</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->alamat_domisili }}</td>
        </tr>
        <tr>
          <td class="text-xl font-semibold mb-2">No Telepon</td>
          <td class="text-xl font-semibold mb-2"> :  {{ $student->no_telepon }}</td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection
