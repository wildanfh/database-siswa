<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Student;
use App\Models\Unit;
use Illuminate\Http\Request;

class ViewController extends Controller
{
  function categories()
  {
    $categories = Category::all();
    return view('app', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function units(Request $request)
  {
    $category = null;
    $pathInfo = $request->getPathInfo();
    $pathSegments = explode('/', $pathInfo);

    if (count($pathSegments) > 2) {
      $category = $pathSegments[2];
    }
    $units = Unit::all();
    return view('views.unit', compact('units', 'category'));
  }

  public function groups(Request $request)
  {
    $category = null;
    $unit = null;
    $pathInfo = $request->getPathInfo();
    $pathSegments = explode('/', $pathInfo);

    if (count($pathSegments) > 2) {
      $category = $pathSegments[2];
    }

    if (count($pathSegments) > 3) {
      $unit = $pathSegments[3];
      // Convert %20 to space in the $unit variable
      $unit = str_replace('%20', ' ', $unit);
    }

    $groups = Group::whereHas('unit', function ($query) use ($unit) {
      $query->where('unit', $unit);
    })->get();

    return view('views.group', compact('groups', 'category', 'unit'));
  }

  public function students(Request $request)
  {
    $category = null;
    $unit = null;
    $group = null;
    $pathInfo = $request->getPathInfo();
    $pathSegments = explode('/', $pathInfo);

    if (count($pathSegments) > 2) {
      $category = $pathSegments[2];
    }

    if (count($pathSegments) > 3) {
      $unit = $pathSegments[3];
      // Convert %20 to space in the $unit variable
      $unit = str_replace('%20', ' ', $unit);
    }

    if (count($pathSegments) > 4) {
      $group = $pathSegments[4];
      // Convert %20 to space in the $unit variable
      $group = str_replace('%20', ' ', $group);
    }
    $query = Student::whereHas('group', function ($query) use ($group) {
      $query->where('group', $group);
    })->whereHas('group.unit', function ($query) use ($unit) {
      $query->where('unit', $unit);
    })->whereHas('category', function ($query) use ($category) {
      $query->where('category', $category);
    });

    if (request()->has('search')) {
      $search = request()->input('search');
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
          ->orWhere('no_telepon', 'like', '%' . $search . '%')->orWhereHas('category', function ($q) use ($search) {
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

    return view('views.student', compact('students', 'category', 'unit', 'group'));
  }


  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
