@extends('layouts.main')

@section('content')
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Свяжитесь с нами</h1>

            <form class="space-y-5 mt-5" method="POST" action="{{ route('api.contacts.send') }}">
                @csrf

                <label>
                    @error('email')<span class="text-red-500">{{ $message }}</span>@enderror
                    <input name="email" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
                           placeholder="Email"/>
                </label>


                <label>
                    @error('text')<span class="text-red-500">{{ $message }}</span>@enderror
                    <input name="text" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
                           placeholder="Сообщение"/>
                </label>


                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                    Написать
                </button>
            </form>
        </div>
    </div>
@endsection
