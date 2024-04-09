<div class="pagination flex justify-between">
    @if ($paginator->onFirstPage())
        <span class="disabled px-6 text-center bg-gray-500 rounded-md text-white py-3 font-medium">Назад</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}"
           class="text-center px-6 bg-blue-900 rounded-md text-white py-3 font-medium" rel="prev">Назад</a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
           class="text-center px-6 bg-blue-900 rounded-md text-white py-3 font-medium" rel="next">Вперед</a>
    @else
        <span class="disabled px-6 text-center bg-gray-500 rounded-md text-white py-3 font-medium">Вперед</span>
    @endif
</div>
