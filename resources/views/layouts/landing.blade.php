<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('includes.metatags')
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
