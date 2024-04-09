<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-xl rounded p-5">
        <h1 class="text-3xl font-medium">Регистрация</h1>

        <form action="{{ route('api.auth.register')  }}" class="space-y-5 mt-5" method="POST">
            @csrf

            <label for="name">
                <span class="text-red-500">@error('name') {{ $message }}@enderror</span>
                <input value="{{ old('name') }}" name="name" type="text"
                       class="w-full h-12 border border-gray-800 rounded px-3 mb-5 @error('name') border-red-500 @enderror"
                       placeholder="Имя"/>
            </label>

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

            <label for="password_confirmation">
                <span class="text-red-500">@error('password_confirmation') {{ $message }}@enderror</span>
                <input value="{{ old('password_confirmation') }}" name="password_confirmation" type="password"
                       class="w-full h-12 border border-gray-800 rounded px-3 mb-5 @error('password_confirmation') border-red-500 @enderror"
                       placeholder="Подтверждение пароля"/>
            </label>

            <div>
                <a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть
                    аккаунт?</a>
            </div>

            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Зарегистрироваться
            </button>
        </form>
    </div>
</div>

<!-- Scripts -->
@vite('resources/js/app.js')

</body>
</html>
