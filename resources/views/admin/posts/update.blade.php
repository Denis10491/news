@extends('layouts.admin')

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Редактировать статью ID {{ $post->id }}</h3>

            <div class="mt-8"></div>

            <div class="mt-8">
                <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST"
                      action="{{ route('admin.api.posts.update', ['post' => $post]) }}">
                    @csrf
                    @method('PUT')

                    <input name="title" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror"
                           placeholder="Название" value="{{ $post->title }}"/>

                    <input name="preview" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-500 @enderror"
                           placeholder="Кратко" value="{{ $post->preview }}"/>

                    <input name="description" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror"
                           placeholder="Описание"
                           value="{{ $post->description }}"/>

                    <div>
                        <img class="h-64 w-64" src="{{ $post->thumbnail }}" alt="">
                    </div>

                    @error('thumbnail')<span class="text-red-500">{{ $message }}</span>@enderror
                    <input name="thumbnail" type="file" class="w-full h-12"
                           placeholder="Обложка"/>

                    <button type="submit"
                            class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                        Сохранить
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
