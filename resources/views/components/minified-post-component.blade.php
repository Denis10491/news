<div class="px-4 py-8 max-w-xl">
    <div class="bg-white shadow-2xl">
        <div>
            <a href="{{ route('posts.show', ['post' => $post]) }}">
                <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"/>
            </a>
        </div>

        <div class="px-4 py-2 mt-2 bg-white">
            <h2 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h2>

            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {{ $post->description }}
            </p>
        </div>
    </div>
</div>
