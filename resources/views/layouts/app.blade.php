<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="Gadallah">
    <meta name="author" content="Paul, Logan Cee">
    <title>Gadallah</title>
    <link href="{{URL::asset('assets/site/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/socicon.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/jquery.pagepiling.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/site/assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/site/assets/img/favicon.png')}}">
  </head>
  <body class="theme-yellow dark-horizontal">
    <!-- start loading -->
    <section class="loading-overlay">
      <div class="pulse"><img src="{{URL::asset('assets/site/assets/img/e-logo.png')}}" alt=""></div>
    </section>
    <!-- end loading -->
    <div class="">
      <div class="wrapper">

      @include('components.header')

        @yield('content')


      </div>
    </div>

    
    <script data-cfasync="false" src="{{URL::asset('assets/site/assets/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="../../../../code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{URL::asset('assets/site/assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/smoothscroll.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/animsition.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/jquery.pagepiling.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/ScrollMagic.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/animation.gsap.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/jquery.viewport.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{URL::asset('assets/site/assets/js/script.js')}}"></script>

    <script>
      $(document).ready(function() {
        $('.a-pagepiling').pagepiling({
          scrollingSpeed: 280,
          menu: '#menu',
          loopTop: true,
          loopBottom: true,
          navigation: {
                'position': 'right'
          },
          afterLoad: function(anchorLink, index){
            if(index == 1 || index == 3 || index == 5){ // Section with dark bacgkrounds
              $('body').addClass('dark-horizontal');
            }
            else{
              $('body').removeClass('dark-horizontal');
            }
          },
          onLeave: function(){
            $('.section.active .slide-bg-list .slide-bg').removeClass('active').eq(0).addClass('active')
          }
        });

        $('.a-pp-prev').on('click', function(){
          $.fn.pagepiling.moveSectionUp();
        });
        $('.a-pp-next').on('click', function(){
          $.fn.pagepiling.moveSectionDown();
        });
      });
    </script>
    <script>
      // loading screen
      $(window).load(function(){
        $(".loading-overlay .pulse").fadeOut(2000, function() {
            $(this).parent().fadeOut(2000,  function() {
                $("body").css("overflow","auto")
                $(this).remove();
              });
          });
      });
    </script>
  </body>
</html>
