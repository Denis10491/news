@extends('layouts.admin')

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Статьи</h3>

            <div class="mt-8">
                <a href="" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
            </div>

            <div class="flex flex-col mt-8">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <!-- Posts -->
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Заголовок
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                            </thead>

                            <tbody class="bg-white">

                            @foreach($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $post->title }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                        <a href="#"
                                           class="text-indigo-600 hover:text-indigo-900">Редактировать</a>

                                        <form action="" method="POST">
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                Удалить
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                        <!-- Pagination -->
                        <div
                            class="border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                            {{ $posts }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
