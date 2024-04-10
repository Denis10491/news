<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->latest()->paginate(3);
        return view('home', ['posts' => $posts]);
    }

    public function show(Post $post): View
    {
        return view('posts.post', ['post' => $post]);
    }
}
