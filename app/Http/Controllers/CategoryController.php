<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = Category::query();

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('category', 'like', '%' . $search . '%');
    }

    $categories = $query->paginate(10);

    return view('categories.index', compact('categories'));

    // $keyword = $request->get('search');
    // $perPage = 25;

    // if (!empty($keyword)) {
    //   $categories = Category::where('category', 'LIKE', "%$keyword%")
    //     ->latest()->paginate($perPage);
    // } else {
    //   $categories = Category::paginate($perPage);
    // }

    // return view('categories.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'category' => 'required|max:255',
    ]);

    $category = new Category;
    $category->category = $validatedData['category'];
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category created successfully!');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $category = Category::findOrFail($id);

    return view('categories.show', compact('category'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $category = Category::findOrFail($id);

    return view('categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'category' => 'required|max:255',
    ]);

    $requestData = $request->all();

    $category = Category::findOrFail($id);
    $category->category = $request['category'];
    $category->update($requestData);

    return redirect()->route('categories.index')->with('success', 'Item updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Category::destroy($id);

    return redirect()->route('categories.index')->with('success', 'Item Deleted successfully.');
  }
}
