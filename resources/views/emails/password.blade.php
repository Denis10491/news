<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generated Password</title>
</head>
<body>
<h1>{{ __('email.password.title', ['name' => $user->name]) }}</h1>
<p>{{ __('email.password.content', ['email' => $user->email, 'password' => $password]) }}</p>
</body>
</html>
