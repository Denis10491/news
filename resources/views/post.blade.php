@extends('layouts.main')

@section('title', 'Новости')

@section('content')
    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <x-post-component :post="$post"></x-post-component>

            <div>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="{{ route('api.comments.store', ['post' => $post]) }}">
                        @csrf

                        <label>
                            @error('text')<span class="text-red-500">{{ $message }}</span>@enderror
                            <textarea name="text"
                                      class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl border border-red-500"
                                      placeholder="Ваш комментарий..." spellcheck="false">
                            </textarea>
                        </label>

                        <button type="submit"
                                class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg">
                            Написать
                        </button>
                    </form>

                    <div id="task-comments" class="pt-4">

                        @foreach($post->comments as $comment)
                            <x-comment-component :comment="$comment"></x-comment-component>
                        @endforeach

                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
