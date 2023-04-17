<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.categories.index', [
            'categories' => Category::all(),
            'category' => Category::pluck('id')->toArray()
        ]);
    }

    public function create()
    {
        return view('pages.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => "required"
        ]);

        Category::create($validated);
        return redirect()->route('categories.index')->with(['success' => "Successfully created a category"]);
    }

    public function edit(Category $category)
    {
        return view('pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);
        $category->update($validated);
        return redirect()->route('categories.index')->with(['success' => "Successfully updated a category"]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with(['success' => "Successfully deleted a category"]);
    }
}
