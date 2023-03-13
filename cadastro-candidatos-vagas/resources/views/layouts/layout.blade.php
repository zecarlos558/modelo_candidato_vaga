<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo_sts.png') }}">
    <title>{{ config('app.name', 'Sistema') }} | @yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body id="corpo">
    <header>
        <x-menu-nav></x-menu-nav>
    </header>

    <div id="conteudo">
        @yield('content')
    </div>

    <footer id="footer">
        <p>
            <ion-icon name="logo-laravel"></ion-icon> José Carlos &copy; {{ date('d/m/Y') }}
        </p>
    </footer>
</body>

</html>
