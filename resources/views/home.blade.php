<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>laravel - primi - passi</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1>Hello Laravel!</h1>
        <h2>Benvenuto {{$nome}} {{$cognome}} !!</h2>
        <a href="{{route('new_route')}}">NUOVA ROUTE/PAGINA</a>
    </body>
</html>
