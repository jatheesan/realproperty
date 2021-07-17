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
        <!--============== Header Section Start ==============-->
        <header class="nav-on-top shadow-sm fixed-bg-dark">
            <div class="main-nav py-2 xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                {{--<a class="navbar-brand" href="#"><img class="nav-logo" src="assets/images/logo/logo-full-white.png" alt="Image not found !"></a>--}}
                                <a class="navbar-brand text-brand" href="#" style="color:#ff7f50 !important;"><span class="text-b">i</span><span>HOMES</span></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/list') }}">Properties</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/about') }}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                    {{--<a href="{{ url('/sign_in') }}" class="ms-2 btn btn-primary md-mx-none rounded-pill">Sign in</a>--}}
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
        <footer class="full-row p-0 footer-default-dark bg-secondary">
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget mb-5">
                                <h1 class="widget-title mb-4 font-400 footer-title" style="color:#ff7f50; text-align: justify !important;"><span class="text-c">i</span><span>HOMES</span></h1>
                                <p class="text-white" style="text-align: justify !important;">
                                iHOMES is the most advanced real estate and rental marketplace in London. 
                                Our online platform offers various types of latest properties in London. 
                                Whether you are buying, selling, letting or renting property, 
                                or simply want to arrange a mortgage, we would be delighted to help you. 
                                After all, it's what we do best. Covering the entire property spectrum from 
                                first time buyer flats to large country properties with acreage, 
                                at iHOMES we pride ourselves on being able to make your property sale or purchase a success every time.
                                </p>
                                <div class="footer-widget media-widget mt-1">
                                    <a href="#" class="badge"><i class="fab fa-facebook-f text-primary"></i></a>
                                    <a href="#" class="badge"><i class="fab fa-twitter text-primary"></i></a>
                                    <a href="mailto:info@i-homes.net?subject=Website%20enquiry" class="badge"><i class="fab fa-google-plus-g text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row row-cols-1 row-cols-sm-3">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-5">
                                    <div class="footer-widget contact-widget mb-4">
                                        <h3 class="widget-title mb-4 ms-4">Contact Info</h3>
                                        <table border="0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="vertical-align: top;"><span
                                                            class="fas fa-map-marker-alt banner-tagline font-large text-primary">{{ " " }}</span>
                                                    </th>
                                                    <td>
                                                        <span class="font-medium text-primary">Ihomes Lettings & Management.<br />
                                                            Suite 1,<br />
                                                            976 Eastern Ave,<br />
                                                            Newbury Park.<br />
                                                            IG2 7JD</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><span class="fas fa-phone banner-tagline font-large text-primary">{{ '  ' }}</span></th>
                                                    <td>
                                                        <h6 class="text-white">(0208) 599 2555</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><span class="fas fa-envelope-open banner-tagline font-large text-primary">{{ '  ' }}</span></th>
                                                    <td>
                                                        <h6><a class="text-white" href="mailto:info@i-homes.net?subject=Website%20enquiry">info@i-homes.net</a></h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4 ms-4">The Company</h4>
                                        <ul class="ms-4">
                                            <li><a href="https://www.google.com/maps/search/Ihomes,+976+Eastern+Avenue,+IG2+7JD/@51.577491,0.09895,16z?hl=en-GB" target="_blank">Site Map</a></li>
                                            <li><a href="#">Legal</a></li>
                                            <li><a href="#">Agent Admin</a></li>
                                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{--<div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Locations in UK</h4>
                                        <ul>
                                            <li><a href="#">London</a></li>
                                            <li><a href="#">Glasgow</a></li>
                                            <li><a href="#">Brimingham</a></li>
                                            <li><a href="#">Bristol</a></li>
                                            <li><a href="#">Edinburgh</a></li>
                                            <li><a href="#">Sheffield</a></li>
                                            <li><a href="#">Liverpool</a></li>
                                        </ul>
                                    </div>
                                </div>--}}
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
                            <span>Copyright © 2021 ITi Repairs Ltd All right reserved</span>
                        </div>
                        <div class="col foot">
                            <ul class="line-menu float-lg-end list-color-secondary">
                                <li><a href="/privacy-policy" style="color: #fff !important;">Privacy Policy</a></li>
                                <li style="color: #ff7f50 !important;">|</li>
                                <li><a href="https://www.google.com/maps/search/Ihomes,+976+Eastern+Avenue,+IG2+7JD/@51.577491,0.09895,16z?hl=en-GB" target="_blank" style="color: #fff !important;">Site Map</a></li>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>    
</body>
</html>