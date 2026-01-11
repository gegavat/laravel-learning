<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Блог')</title>
</head>
<body>
<header>
    <a href="/posts">Блог</a>
</header>

<main>
    @yield('content')
</main>
</body>
</html>
