<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SGF - Sistema de Gerenciamento Financeiro</title>
</head>
<body>
    <h1>SGF - Sistema de Gerenciamento Financeiro</h1>

    <nav>
        <a href="{{ route('instituicoes.index') }}">Instituições</a> |
        <a href="{{ route('campi.index') }}">Campi</a> |
        <a href="{{ route('setores.index') }}">Setores</a> |
        <a href="{{ route('orcamentos.index') }}">Orçamentos</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>
        <p>&copy; {{ date('Y') }} SGF - Sistema de Gerenciamento Financeiro</p>
        <a href="https://portal.ifba.edu.br/seabra">IFBA campus Seabra</a>
    </footer>
</body>
</html>
