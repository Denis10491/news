<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function store(Post $post, StoreCommentRequest $request): RedirectResponse
    {
        auth()->user()->comments()->create([
            'post_id' => $post->id,
            ...$request->validated()
        ]);

        return redirect()->route('posts.show', ['post' => $post]);
    }
}
