<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->paginate(3);
        return view('home', ['posts' => $posts]);
    }
}
