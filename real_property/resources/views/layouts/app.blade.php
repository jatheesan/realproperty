<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="unicoder">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'iHOMES')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('boxroomstyle/images/icons8-home-48.png')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Required style of boxroom theme -->
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/webfonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/colors/color-6.css') }}">
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/clock.css') }}">
</head>
<body>

    <div id="page_wrapper" class="bg-light">

        <!-- ======= Main condent ======= -->
        @yield('ihome_content')
        <!-- ======= Main condent End ======= -->
        
        <!-- Scroll to top -->
        <a href="#" class="text-general scroll-top-vertical xs-mx-none" id="scroll">Scroll to top</a>
        <!-- End Scroll To top -->

        <!-- in your blade template -->
        @include('cookieConsent::index')

    </div>

<!-- Boxroom Javascript Files -->
    <script src="{{ asset('boxroomstyle/js/jquery.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/greensock.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/popper.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/owl.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/range/tmpl.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/range/jquery.dependClass.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/range/draggable.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/range/jquery.slider.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/wow.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/paraxify.js') }}"></script>
    <script src="{{ asset('boxroomstyle/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
        
            $('#mySlider').slider({
                values: [25, 175],
                min:0,
                max:1000,
                range: true,
                smooth: true,
                round: 0,
                dimension: "£",
                skin: "plastic",
                create: attachSlider,
                slide: attachSlider,
                stop: attachSlider
            })

            function attachSlider() {
                $('#lowerlimit').val($('#mySlider').slider("values", 0));
                $('#upperlimit').val($('#mySlider').slider("values", 1));
            }
            
            $('input').change(function(e) {
                var setIndex = (this.id == "upperlimit") ? 1 : 0;
                $('#mySlider').slider("values", setIndex, $(this).val())
            })


        });
    </script>
    <script>
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'fullwidth',
            responsiveUnder: 0,
            maxRatio: 1,
            slideBGSize: 'auto',
            hideUnder: 0,
            hideOver: 100000,
            skin: 'numbers',
            fitScreenWidth: true,
            fullSizeMode: 'fitheight',
            thumbnailNavigation: 'disabled',
            height: 860,
            skinsPath: 'assets/skins/'
        });

        $('#single-property').layerSlider({
            sliderVersion: '6.5.0b2',
            type: 'popup',
            pauseOnHover: 'disabled',
            skin: 'photogallery',
            globalBGSize: 'cover',
            navStartStop: false,
            hoverBottomNav: true,
            showCircleTimer: false,
            thumbnailNavigation: 'always',
            tnContainerWidth: '100%',
            tnHeight: 70,
            popupShowOnTimeout: 1,
            popupShowOnce: false,
            popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
            popupResetOnClose: 'disabled',
            popupDistanceLeft: 20,
            popupDistanceRight: 20,
            popupDistanceTop: 20,
            popupDistanceBottom: 20,
            popupDurationIn: 750,
            popupDelayIn: 500,
            popupTransitionIn: 'scalefromtop',
            popupTransitionOut: 'scaletobottom',
            skinsPath: 'assets/skins/'
        });
    </script>

    @if($errors->has('email') || $errors->has('name') || $errors->has('contact') || $errors->has('message') || $errors->has('g-recaptcha-response') || Session::get('success'))
        <script>
        $(function() {
            $("#free-rental-valuation").modal("show");
            setTimeout(function() {
                createRecaptcha();
            }, 100);
        });
        </script>
    @endif

    <script>
        "use strict";

        $("#showModal").click(function() {
            $("#free-rental-valuation").modal("show");
            setTimeout(function() {
                createRecaptcha();
            }, 100);
        });

        function createRecaptcha() {
	        grecaptcha.render("captcha", {sitekey: "6LcAPHkbAAAAAAeHnoucA9T_BPNzj4oaxXQroTPi", theme: "light"});
        }

    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @yield('scripts')    
</body>
</html>