<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tonys</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/7ce9c633cc.js" crossorigin="anonymous"></script>
        <style>
        </style>
    </head>
    <body>
        <section id="appLayout">
            @include('includes.side-menu')
            <section id="contentSection"> 
            @yield('content')
            </section>
        </section>
    </body>
</html>
