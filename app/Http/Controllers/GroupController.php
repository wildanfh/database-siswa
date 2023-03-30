<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Unit;
use Illuminate\Http\Request;

class GroupController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = Group::query();

    if ($request->has('search')) {
      $search = $request->input('search');
      $query->where('group', 'like', '%' . $search . '%');
    }

    $groups = $query->paginate(10);

    return view('groups.index', compact('groups'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $units = Unit::all();
    return view('groups.create', compact('units'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'group' => 'required',
      'unit_id' => 'required|exists:units,id'
    ]);

    Group::create([
      'group' => $request->group,
      'unit_id' => $request->unit_id,
    ]);

    return redirect()->route('groups.index')->with('success', 'Group created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $group = Group::findOrFail($id);

    return view('groups.show', compact('group'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Group $group)
  {
    $units = Unit::all();
    return view('groups.edit', compact('group', 'units'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'group' => 'required|max:255',
    ]);

    $requestData = $request->all();

    $group = Group::findOrFail($id);
    $group->group = $request['group'];
    $group->update($requestData);

    return redirect()->route('groups.index')->with('success', 'Group updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Group::destroy($id);
    return redirect()->route('groups.index')->with('success', 'Group Deleted successfully.');
  }
}
