<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StorePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->latest()->paginate(10);
        return view('admin.home', ['posts' => $posts]);
    }

    public function showFormCreate(): View
    {
        return view('admin.posts.create');
    }

    public function showFormUpdate(Post $post): View
    {
        return view('admin.posts.update', ['post' => $post]);
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $request->validated();

        if (!$request->hasFile('thumbnail')) {
            return redirect()->back();
        }

        $path = $request->file('thumbnail')->storePublicly('images/posts', 'public');

        Post::query()->create([
            'thumbnail' => Storage::url($path),
            ...$request->except(['thumbnail']),
        ]);

        return redirect()->back();
    }

    public function update(Post $post, UpdatePostRequest $request): RedirectResponse
    {
        $request->validated();

        $path = $request->str('thumbnail');
        if ($request->hasFile('thumbnail')) {
            $path = Storage::url($request->file('thumbnail')->storePublicly('images/posts', 'public'));
        }

        $post->update([
            'thumbnail' => $path,
            ...$request->except(['thumbnail']),
        ]);

        return redirect()->back();
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->back();
    }
}
