<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cartório Carutapera')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Link para o nosso CSS (criaremos depois) --}}
</head>
<body>
    <header>
        <h1>Cartório Carutapera</h1>
        <nav>
            <ul>
                <li><a href="{{ route('servicos.index') }}">Serviços</a></li>
                <li><a href="{{ route('noticias.index') }}">Notícias</a></li>
                <li><a href="{{ route('contato.index') }}">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Cartório Carutapera. Todos os direitos reservados.</p>
    </footer>
</body>
</html>