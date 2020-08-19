<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/7ce9c633cc.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section id="appLayout">
          @include('includes.side-menu')
            <div class="welcomeJumbo">
              <div class="titleInfo">
                <h1 class="sectionTitle">Tony's Sports Bar & Grill</h1>
                <h4 class="city">Sandy Springs</h4>
              </div>
              <img class="burgerFries" src="/img/bar_food.png" alt="beer and food">
            </div>
          </section>
          @yield('content')
    </body>
</html>
