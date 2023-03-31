@extends('app')

@section('content')
<div class="container mx-auto">
  <div class="bg-white rounded-lg shadow-md p-6">
    <a href="#" class="text-gray-600 hover:text-gray-800 text-lg" onclick="window.history.back(); return false;">&laquo; Back</a>
    <h2 class="text-2xl font-semibold my-4 bg-white rounded-lg shadow-md p-3 w-fit bg-gray-200">{{ $student->nama_siswa }}</h2>
    <div class="bg-gray-100 p-4 rounded-md">
      <table>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Nama Panggilan</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->panggilan }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Category</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->category->category }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">NISN</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->nisn }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">NIS</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->nis }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">NIK</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->nik }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">No. Akta</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->no_akta }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Jenis Kelamin</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">TPA</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->tpa ? 'Iya'  :   'Nggak' }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Tempat Lahir</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->tempat_lahir }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Tanggal Lahir</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->tanggal_lahir }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Nama Ayah</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->nama_ayah }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Pekerjaan Ayah</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->pekerjaan_ayah }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Nama Ibu</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->nama_ibu }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Pekerjaan Ibu</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->pekerjaan_ibu }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Alamat</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->alamat }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">Alamat Domisili</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->alamat_domisili }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold mb-2 inline-block">No Telepon</td>
          <td class="text-lg font-normal mb-2"> : {{ $student->no_telepon }}</td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection
