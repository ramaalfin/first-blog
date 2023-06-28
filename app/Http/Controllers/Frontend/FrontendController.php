<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $posts = Post::with(['category', 'user'])->inRandomOrder()->get();
        $post = Post::with(['category', 'user'])->inRandomOrder()->first();

        $cat_tech = Category::where('name', 'technology')->pluck('id');
        $post_tech = Post::with('category')->where('category_id', $cat_tech)->limit(2)->get();
        $all_post_tech = Post::with('category')->where('category_id', $cat_tech)->orderByDesc('created_at')->get();

        $cat_health = Category::where('name', 'health')->pluck('id');
        $post_health = Post::with('category')->where('category_id', $cat_health)->limit(2)->get();
        $all_post_health = Post::with('category')->where('category_id', $cat_health)->orderByDesc('created_at')->get();

        $recent_post = Post::orderByDesc('created_at')->limit(4)->get();

        $categories = Category::all();
        return view('frontend.pages.index', [
            'posts' => $posts,
            'post' => $post,
            'post_tech' => $post_tech,
            'all_post_tech' => $all_post_tech,
            'post_health' => $post_health,
            'all_post_health' => $all_post_health,
            'recent_post' => $recent_post,
            'categories' => $categories
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('frontend.pages.single-post', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function category(Category $category){
        return view('frontend.pages.category', [
            'category' => $category,
            'categories' => Category::all(),
            'posts' => Post::with('category')->where('category_id', $category->id)->limit(5)->get()
        ]);
    }

    public function about() {
        return view('frontend.pages.about', [
            'categories' => Category::all(),
        ]);
    }

    public function contact() {
        return view('frontend.pages.contact', [
            'categories' => Category::all(),
        ]);
    }
}
