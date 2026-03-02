<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Mon titre par défaut')</title>
        @section('stylesheets')
            @vite(['resources/css/layouts/base.css'])
        @show
    </head>
    <body>
        @yield('body', 'Corps par défaut')
    </body>
</html>
