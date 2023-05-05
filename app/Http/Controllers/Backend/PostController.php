<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.posts.index', [
            'posts' => Post::all(),
            'post' => Post::pluck('id')->toArray()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.posts.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        $result = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id
        ]);
        if ($result) {
            return redirect()->route('posts.create')->with('success', 'Successfully created a post');
        } else {
            return redirect()->route('posts.create')->with('error', 'Failed created a post');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('backend.pages.posts.edit', [
            'post' => $post,
            'categories' => $post->category->get()
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        $result = $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id
        ]);
        if ($result) {
            return redirect()->route('posts.edit', ['post' => $post->id])->with('success', 'Successfully updated a post');
        } else {
            return redirect()->route('posts.edit', ['post' => $post->id])->with('error', 'Failed updated a post');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Successfully deleted a post');
    }

    public function uploadImage(Request $request)
    {
        $post = new Post();
        $post->id = 0;
        $post->exists = true;
        $images = $post->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $images->getUrl()
        ]);
    }
}
