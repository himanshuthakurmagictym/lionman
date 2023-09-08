<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lionman Commandos</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="BusinessTwin - Multi-Purpose Responsive Website Template" />
    <meta name="keywords" content="BusinessTwin, parallax, one page, multipage, responsive, landing, html template" />
    <meta name="author" content="BusinessTwin">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png">


    <!-- CSS Begins
================================================== -->
    <!--Animate Effect-->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/hover.css')}}" rel="stylesheet">

    <!--Pretty Photo for Image Preview-->
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/nivo-preview.css')}}" type="text/css" media="screen" />

    <!--BootStrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	
	<!--DEFAULT COLOR/ CURRENTLY USING , Replace Your Color--> 
	<link rel="stylesheet" href="{{asset('css/colors/default-color.css')}}">
    
    </head>
    <body>
    <a style="    position: absolute;" href="tel:+917015512160" class="social-icon whatsapp"><img src="/images/call.png" style="    position: fixed;
    width: 70px; right:0px; z-index:11;
    bottom: 0px;"   /></a>	
     <a style="    position: absolute;" href="https://api.whatsapp.com/send?phone=917015512160&text=Hi, I contacted you Through your website." class="social-icon whatsapp" class="social-icon whatsapp"><img src="/images/whatsapp.png" style="    position: fixed;
    width: 70px; left:0px; z-index:11;
    bottom: 0px;"   /></a>
        @include('layout.header')
        @if(url()->current() !== $app['url']->to('/'))
                @include('layout.brudcrumb')
        @endif
        @yield('content')
        @include('layout.footer')
    </body>
 <!-- jquery -->
 <script src="{{asset('js/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
    <!-- Modernizer -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}" type="text/javascript"></script>
    <!-- plugins -->
    <script src="{{asset('js/plugins.js')}}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- Use For Animation -->
    <script src="{{asset('js/wow.min.js')}}" type="text/javascript"></script>
    <!-- Use For Menu -->
    <script src="{{asset('js/menumaker.js')}}" type="text/javascript"></script>
    <!-- Sticky header -->
    <script src="{{asset('js/jquery.sticky.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/sticky-header.js')}}" type="text/javascript" ></script>
    <!-- Use For carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Use For Image Peview -->
    <script src="{{asset('js/lightbox.min.js')}}" type="text/javascript"></script>
    <!-- Use For mixitup gallery -->
    <script src="{{asset('js/jquery.mixitup.min.js')}}" type="text/javascript"></script>
    <!-- Use For nivo slider -->
    <script src="{{asset('js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/nivo-home.js')}}" type="text/javascript"></script>
    <!-- Use For jquery Easing -->
    <script src="{{asset('js/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.easing.compatibility.js')}}" type="text/javascript"></script>
    <!-- Use For Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <!-- Use For Map -->
    <script src="{{asset('js/maps.js')}}" type="text/javascript"></script>
	<!-- Use For singlePageNav  -->
    <script src="{{asset('js/jquery.singlePageNav.min.js')}}" type="text/javascript"></script>
  
    <!-- Custom Scripts
========================================-->
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>

            <script type='text/javascript'>$(document).ready(function() {

        $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
        $(this).text(Math.ceil(now));
        }
        });
        });

        });</script>
</html>
