<?php

namespace App\Http\Controllers;

use App\Models\EntryYear;
use Illuminate\Http\Request;

class EntryYearController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = EntryYear::query();

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('entry_year', 'like', '%' . $search . '%');
    }

    $entryYears = $query->paginate(10);

    return view('entryYears.index', compact('entryYears'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('entryYears.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'entry_year' => 'required|max:255',
    ]);

    $entryYear = new EntryYear;
    $entryYear->entry_year = $validatedData['entry_year'];
    $entryYear->save();

    return redirect()->route('entryYears.index')->with('success', 'EntryYear created successfully!');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $entryYear = EntryYear::findOrFail($id);

    return view('entryYears.show', compact('entryYear'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $entryYear = EntryYear::findOrFail($id);

    return view('entryYears.edit', compact('entryYear'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'entryYear' => 'required|max:255',
    ]);

    $requestData = $request->all();

    $entryYear = EntryYear::findOrFail($id);
    $entryYear->entry_year = $request['entryYear'];
    $entryYear->update($requestData);

    return redirect()->route('entryYears.index')->with('success', 'Tahun Masuk updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    EntryYear::destroy($id);

    return redirect()->route('entryYears.index')->with('success', 'Item Deleted successfully.');
  }
}
