<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body>
            @yield('content')

            <footer>
                Copyright 2024 Pizza House
            </footer>
    </body>
</html>