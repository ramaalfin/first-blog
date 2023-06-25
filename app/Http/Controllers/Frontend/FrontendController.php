<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $posts = Post::with(['category', 'user'])->inRandomOrder()->get();
        $post = Post::with(['category', 'user'])->inRandomOrder()->first();
        return view('frontend.pages.index', [
            'posts' => $posts,
            'post' => $post
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('frontend.pages.single-post', [
            'post' => $post
        ]);
    }

    public function about() {
        return view('frontend.pages.about');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }
}
