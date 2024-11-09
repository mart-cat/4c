<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav> 
        @if (Auth::check())
        <a href="/">Главная</a>
        <a href="{{route('profile')}}">Рассказы</a>
        <a href="{{route('logout')}}">Выход</a>
        @else
        <a href="{{route('logShow')}}">Вход</a>
        <a href="{{route('regShow')}}">Регистрация</a>
        @endif
    </nav>
    {{$slot}}
</body>
</html>