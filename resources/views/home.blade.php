@extends('layouts.main')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        <div class="px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl">
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/600" alt="Post 1"/>
                    </a>
                </div>

                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">Post 1</h2>

                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        Post preview description
                    </p>
                </div>
            </div>
        </div>

        <div class="px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl">
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/600" alt="Post 2"/>
                    </a>
                </div>

                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">Post 2</h2>

                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        Post preview description
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
