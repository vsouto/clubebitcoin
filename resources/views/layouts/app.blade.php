<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/superfish.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awsome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orbit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color/green.css') }}" rel="stylesheet">
    <link href="{{ asset('css/zerogrid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/orbit.min.js') }}"></script>
    <script src="{{ asset('js/css3-mediaqueries.js') }}"></script>


</head>
<body class="home blog">

    @include('elements.header')

    @yield('content')

    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
            <div class="wrap-col">
                <!-- Footer Copyright -->
                <p>Copyrigh &copy; 2018 Clube Bitcoin. All Rights Reserved.</p>
                <!-- End Footer Copyright -->

                <!-- Footer Logo -->
                <img src="{{ asset('img/clube-bitcoin.png') }}" id="footer-logo" />
                <!-- End Footer Logo -->

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <script type="text/javascript" language="javascript">
        $(function() {

            /* Start Carousel
            $('#featured-posts').carouFredSel({
                auto: true,
                prev: '#prev2',
                next: '#next2',
            });
            /* End Carousel */


            /* Start Orbit Slider */
            $(window).load(function() {
                $('.post-gallery').orbit({
                    animation: 'fade',
                });
            });
            /* End Orbit Slider */


            /* Start Super fish */
            jQuery(document).ready(function(){
                jQuery('ul.sf-menu').superfish({
                    delay:         100,
                    speed:         'fast',
                    speedOut:      'fast',
                });
            });
            /* End Of Super fish */

            $('.social-network-link').click(function() {

                alert('Esta funcionalidade ainda não está pronta!');
                return false;
            });

            $('#searchsubmit').click(function() {

                alert('Esta funcionalidade ainda não está pronta!');
                return false;
            });


        });
    </script>

</body>
</html>
