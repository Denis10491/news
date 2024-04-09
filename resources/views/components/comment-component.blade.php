<div
    class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center mr-2">
        <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }}</h3>
    </div>

    <p style="width: 90%"
       class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>
</div>
