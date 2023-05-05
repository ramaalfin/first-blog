<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.pages.categories.index', [
            'categories' => Category::withCount('posts')->get(),
            'category' => Category::pluck('id')->toArray(),
        ]);
    }

    public function create()
    {
        return view('backend.pages.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => "required"
        ]);

        $result = Category::create($validated);
        if ($result) {
            return redirect()->route('categories.create')->with('success', "Successfully created a category");
        } else {
            return redirect()->route('categories.create')->with('errors', "Failed created a category");
        }

    }

    public function edit(Category $category)
    {
        return view('backend.pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);
        $result = $category->update($validated);
        if ($result) {
            return redirect()->route('categories.edit', ['category' => $category->id])->with('success', "Successfully updated a category");
        } else {
            return redirect()->route('categories.edit', ['category' => $category->id])->with('success', "Failed updated a category");
        }

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with(['success' => "Successfully deleted a category"]);
    }
}
