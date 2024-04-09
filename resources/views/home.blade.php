@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($posts as $post)
            <x-minified-post-component :post="$post"></x-minified-post-component>
        @endforeach
    </div>

    {{ $posts->links('vendor.pagination') }}
@endsection
