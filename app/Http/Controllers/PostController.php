<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->paginate(3);
        return view('home', ['posts' => $posts]);
    }

    public function show(Post $post): View
    {
        return view('post', ['post' => $post]);
    }
}
