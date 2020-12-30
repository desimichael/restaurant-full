<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="appLayout">
            @include('includes.side-menu')
            <section id="contentSection"> 
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
            </section>
            @include('includes.footer')
        </section>
        <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script> 
    let slides = $('.slidingSystem a.slide').length;
    let maxSlides = 0;
    let moveTotal;
    let currentSlide = 0;

    $(window).resize(function() {
        currentSlide = 0;
        $('.slidingSystem').css('transform', 'translate3d(-0%, 0, 0');
    })
    function desktopSlider() {
        if(a.matches) {
            maxSlides = Math.ceil((slides * 20) / 100);
            moveTotal = 100;
            // RIGHT BTN
            $('.rightBtn').on('click', () => {
                console.log('clicked right btn')
                if(currentSlide < maxSlides) {
                    currentSlide += 100;
                    $('.slidingSystem').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
                }
            });
            // LEFT BTN
            $('.leftBtn').on('click', () => {
                console.log('clicked left btn')
                if(currentSlide != 0) {
                    currentSlide -= 100;
                    $('.slidingSystem').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
                }
            });
        }
    }
    var a = window.matchMedia("(min-width: 998px)")
    desktopSlider(a);
    a.addListener(desktopSlider);

    function tabletSlider() {
        if(b.matches) {
            maxSlides = Math.ceil((slides * 50) /100);
            moveTotal = 100;
             // RIGHT BTN
            $('.rightBtn').on('click', () => {
                console.log('clicked right btn')
                if(currentSlide < ((maxSlides * 100) - 100)) {
                    currentSlide += 50;
                    $('.slidingSystem').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
                }
            });
            // LEFT BTN
            $('.leftBtn').on('click', () => {
                console.log('clicked left btn')
                if(currentSlide != 0) {
                    currentSlide -= 50;
                    $('.slidingSystem').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
                }
            });
        }
    }
    var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");
    console.log(b);
        tabletSlider(b);
        a.addListener(tabletSlider);
  </script>
    </body>
</html>