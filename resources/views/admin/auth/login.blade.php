@extends('layouts.auth')

@section('content')
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form method="POST" action="{{ route('admin.api.auth.login')  }}" class="space-y-5 mt-5">
                @csrf

                <label for="email">
                    <span class="text-red-500">@error('email') {{ $message }}@enderror</span>
                    <input value="{{ old('email') }}" name="email" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 mb-5 @error('email') border-red-500 @enderror"
                           placeholder="Email"/>
                </label>

                <label for="password">
                    <span class="text-red-500">@error('password') {{ $message }}@enderror</span>
                    <input value="{{ old('password') }}" name="password" type="password"
                           class="w-full h-12 border border-gray-800 rounded px-3 mb-5 @error('password') border-red-500 @enderror"
                           placeholder="Пароль"/>
                </label>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                    Войти
                </button>
            </form>
        </div>
    </div>
@endsection
