<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="unicoder">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BoxRoom4Rent')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('boxroomstyle/images/favicon.ico')}}">

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
        <!--============== Header Section Start ==============-->
        <header class="nav-on-top shadow-sm bg-white">
            <div class="main-nav py-2 xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                {{--<a class="navbar-brand" href="#"><img class="nav-logo" src="assets/images/logo/logo-full-white.png" alt="Image not found !"></a>--}}
                                <a class="navbar-brand text-brand" href="#" style="color:#ff7f50 !important;"><span>BoxRoom</span><span class="text-b">4</span><span>Rent</span></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color:#ff7f50 !important;">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html" style="color:#ff7f50 !important;">Contact</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="ms-2 btn btn-primary md-mx-none rounded-pill">Sign in</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->

        <!-- ======= Main condent ======= -->
            @yield('content')
        <!-- ======= Main condent End ======= -->

        <!--============== Footer Section Start ==============-->
        <footer class="full-row p-0 footer-default-dark bg-footer">
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget mb-5">
                                <h1 class="widget-title mb-4 font-400 footer-title" style="color:#ff7f50; text-align: justify !important;"><span>BoxRoom</span><span class="text-c">4</span><span>Rent</span></h1>
                                <p style="text-align: justify !important;">
                                BoxRoom for Rent is the most advanced real estate and rental marketplace in UK. 
                                Our online platform offers various types of latest properties in London. 
                                We are aimed at changing the Real Estate industry of london. 
                                We offer all our services for free and we encourage every single user 
                                to advertise with us to feel our disruptive innovation in the Online Real Estate Market of london. 
                                We help you to Sell, Rent, or Buy any type of property for Free.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row row-cols-1 row-cols-sm-3">
                                <div class="col">
                                    <div class="footer-widget contact-widget mb-4">
                                        <h3 class="widget-title mb-4">Contact Info</h3>
                                        <ul>
                                            <li style="text-align: justify !important;">Unicoder Design Agency 301 The Greenhouse, Custard Factory, London, E3 8DY.</li>
                                            <li><h6 class="text-h">+1 246-345-0695</h6></li>
                                            <li><h6 class="text-h">boxroom4rent@gmail.com</h6></li>
                                        </ul>
                                        <div class="footer-widget media-widget mt-1">
                                            <a href="#"><i class="fab fa-facebook-f text-primary"></i></a>
                                            <a href="#"><i class="fab fa-twitter text-primary"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in text-primary"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g text-primary"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">The Company</h4>
                                        <ul>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Legal</a></li>
                                            <li><a href="#">Agent Admin</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Locations</h4>
                                        <ul>
                                            <li><a href="#">United Kingdom</a></li>
                                            <li><a href="#">London</a></li>
                                            <li><a href="#">United Arab Amirat</a></li>
                                            <li><a href="#">United Kingdom</a></li>
                                            <li><a href="#">Canada</a></li>
                                            <li><a href="#">Romania</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--============== Copyright Section Start ==============-->
            <div class="copyright-border text-secondary">
                <div class="container py-4">
                    <div class="row row-cols-lg-2 row-cols-1">
                        <div class="col foot text-h">
                            <span>Copyright © 2021 BoxRoom4Rent All right reserved</span>
                        </div>
                        <div class="col foot">
                            <ul class="line-menu float-lg-end list-color-secondary">
                                <li><a href="#" style="color: #fff !important;">Advertise</a></li>
                                <li style="color: #ff7f50 !important;">|</li>
                                <li><a href="#" style="color: #fff !important;">Questions</a></li>
                                <li style="color: #ff7f50 !important;">|</li>
                                <li><a href="#" style="color: #fff !important;">Disclaimer</a></li>
                                <li style="color: #ff7f50 !important;">|</li>
                                <li><a href="#" style="color: #fff !important;">Privacy Policy</a></li>
                                <li style="color: #ff7f50 !important;">|</li>
                                <li><a href="#" style="color: #fff !important;">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--============== Copyright Section End ==============-->
        </footer>

        <!-- Scroll to top -->
        <a href="#" class="text-general scroll-top-vertical xs-mx-none" id="scroll">Scroll to top</a>
        <!-- End Scroll To top -->
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
</body>
</html>