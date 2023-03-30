<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EntryYear;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = Student::query();

    if ($request->has('search')) {
      $search = $request->input('search');
      $query->where(function ($q) use ($search) {
        $q->where('nisn', 'like', '%' . $search . '%')
          ->orWhere('nis', 'like', '%' . $search . '%')
          ->orWhere('nik', 'like', '%' . $search . '%')
          ->orWhere('nama_siswa', 'like', '%' . $search . '%')
          ->orWhere('panggilan', 'like', '%' . $search . '%')
          ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
          ->orWhere('nama_ayah', 'like', '%' . $search . '%')
          ->orWhere('pekerjaan_ayah', 'like', '%' . $search . '%')
          ->orWhere('nama_ibu', 'like', '%' . $search . '%')
          ->orWhere('pekerjaan_ibu', 'like', '%' . $search . '%')
          ->orWhere('alamat', 'like', '%' . $search . '%')
          ->orWhere('alamat_domisili', 'like', '%' . $search . '%')
          ->orWhere('no_telepon', 'like', '%' . $search . '%')
          ->orWhereHas('category', function ($q) use ($search) {
            $q->where('category', 'like', '%' . $search . '%');
          })
          ->orWhereHas('group', function ($q) use ($search) {
            $q->where('group', 'like', '%' . $search . '%');
          })
          ->orWhereHas('entryYear', function ($q) use ($search) {
            $q->where('entry_year', 'like', '%' . $search . '%');
          });
      });
    }

    $students = $query->paginate(10);

    return view('students.index', compact('students'));
  }



  /**
   * Show the form for creating a new resource.
   */
  public function create(Student $students)
  {
    $categories = Category::all();
    $groups = Group::all();
    $entryYears = EntryYear::all();
    return view('students.create', compact('categories', 'students', 'groups', 'entryYears'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'category_id' => 'required',
      'group_id' => 'required',
      'entry_year_id' => 'required',
      'nisn' => 'nullable',
      'nis' => 'required',
      'nik' => 'nullable',
      'no_akta' => 'nullable',
      'nama_siswa' => 'required',
      'panggilan' => 'nullable',
      'jenis_kelamin' => 'required',
      'tpa' => 'nullable',
      'tempat_lahir' => 'nullable',
      'tanggal_lahir' => 'nullable',
      'nama_ayah' => 'nullable',
      'pekerjaan_ayah' => 'nullable',
      'nama_ibu' => 'nullable',
      'pekerjaan_ibu' => 'nullable',
      'alamat' => 'nullable',
      'alamat_domisili' => 'nullable',
      'no_telepon' => 'nullable',
    ]);

    Student::create($validatedData);

    return redirect()->route('students.index')
      ->with('success', 'Student created successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $student = Student::findOrFail($id);

    return view('students.show', compact('student'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Student $student)
  {
    $categories = Category::all();
    $groups = Group::all();
    $entryYears = EntryYear::all();
    return view('students.edit', compact('categories', 'student', 'groups', 'entryYears'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validatedData = $request->validate([
      'category_id' => 'required',
      'group_id' => 'required',
      'entry_year_id' => 'required',
      'nisn' => 'nullable',
      'nis' => 'required',
      'nik' => 'nullable',
      'no_akta' => 'nullable',
      'nama_siswa' => 'required',
      'panggilan' => 'nullable',
      'jenis_kelamin' => 'required',
      'tpa' => 'nullable',
      'tempat_lahir' => 'nullable',
      'tanggal_lahir' => 'nullable',
      'nama_ayah' => 'nullable',
      'pekerjaan_ayah' => 'nullable',
      'nama_ibu' => 'nullable',
      'pekerjaan_ibu' => 'nullable',
      'alamat' => 'nullable',
      'alamat_domisili' => 'nullable',
      'no_telepon' => 'nullable',
    ]);

    $student = Student::findOrFail($id);
    $student->update($validatedData);

    return redirect()->route('students.index')
      ->with('success', 'Student updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Student::destroy($id);
    return redirect()->route('students.index')->with('success', 'Student Deleted successfully.');
  }
}
