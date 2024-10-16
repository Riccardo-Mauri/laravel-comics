<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="/css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')
    </head>
    <body>
    <!-- HEADER -->
    <header>
        @include('partials.header') <!-- Inclusione del file header -->
    </header>

    <!-- MAIN -->
    <main>
        @yield('content') <!-- Qui va il contenuto specifico di ogni pagina -->
    </main>

    <!-- FOOTER -->
    <footer>
        @include('partials.footer') <!-- Inclusione del file footer -->
    </footer>
    </body>
</html>
