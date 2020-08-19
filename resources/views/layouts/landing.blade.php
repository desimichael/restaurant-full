<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tony's Sports Bar</title>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta property="og:title" content="CodingPhase - Learn To Code and Get Paid ASAP!">
  <meta name="description"
    content="Full Stack Application with PHP Laravel">
  <meta property="og:description"
    content="Full Stack Application with PHP Laravel">
  <link rel="canonical" href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ad38f1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/iconsfavicon-16x16.png">
  <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="/css/app.css">
  <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <section id="welcome">
    <div class="welcome-menu">
      <div class="logo">
        <img src="/img/tonys_logo.png">
      </div>
      <div class="menu">
        <div class="menu-title">
          Menu
        </div>
        <ul class="links">
          <li>
            <a href="#">Menu</a>
          </li>
          <li>
            <a href="#">Waitlist</a>
          </li>
          <li>
            <a href="#">Offers</a>
          </li>
          <li>
            <a href="#">Giftcards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          234 Main st,<br>
          New York, New York 11747
        </div>
        <div class="phone-number">
          <a href="tel:7182198652">718-219-8652</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Tony's</h1>
      <img src="/img/bar_food.png" class="burger-fries">
    </div>
  </section>
   @yield('content')
  <section id="information">
    <div class="restaurant-image">
      <img src="img/top-down.jpg">
    </div>
    <div class="info">
      <h2>We Started From The Bottom In 1987</h2>
      <div class="paragraphs">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!</p>
      </div>
      <a href="#" class="about-link">
        <span>Learn more about restaurants</span>
        <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </a>
    </div>
  </section>
  <section id="food-preview">
    <h2>We have everything you need to kill your hunger</h2>
    <div class="button-rounded">View Our Menu</div>
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Starters
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img src="https://taco.sfo2.digitaloceanspaces.com/2019/04/CHIPS.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Burgers
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Entrees
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Sides
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Salad-Transparent-PNG.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Deserts
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img
                  src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Beers
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img
                  src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Drinks
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img
                  src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
  <script src="/js/dist/FirstComp.js"></script>
  <script src="/js/dist/main.js"></script> -->
</body>

</html>