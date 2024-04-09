<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function show(Post $post): View
    {
        return view('post', ['post' => $post]);
    }
}
