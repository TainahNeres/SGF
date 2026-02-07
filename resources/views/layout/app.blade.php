<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema')</title>
</head>
<body>

<header>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </nav>
</header>

<hr>

<main>
    @yield('content')
</main>

</body>
</html>
