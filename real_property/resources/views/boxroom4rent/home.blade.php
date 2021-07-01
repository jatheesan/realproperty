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
        <header class="nav-on-banner bg-transparent fixed-bg-dark shadow-none md-bg-secondary">
            <div class="main-nav py-2 xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                {{--<a class="navbar-brand" href="{{ url('/') }}"><img class="nav-logo" src="assets/images/logo/logo-full-white.png" alt="Image not found !"></a>--}}
                                <a class="navbar-brand text-brand" href="{{ url('/') }}"><span>BoxRoom</span><span class="text-b">4</span><span>Rent</span></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/about') }}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-t" href="{{ url('/contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('/sign_in') }}" class="ms-2 btn btn-primary md-mx-none rounded-pill">Sign in</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->

        <!--============== Slider Area Start ==============-->
        <div class="full-row p-0 overflow-hidden">
            <div id="slider" class="overflow-hidden" style="width:1200px; height:720px; margin:0 auto;margin-bottom: 0px;">
                <!-- Slide 1-->
                <div class="ls-slide" data-ls="kenburnsscale:1.2; duration:12000;">
                    <img width="1920" height="1080" src="{{ asset('boxroomstyle/images/slider/london14.jpg') }}" class="ls-bg" alt="">

                    <div style="top:-100px; left:-7%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:140%; width:100%; opacity:1; border-radius: 50px; transform: rotate(20deg)" class="ls-l bg-primary ls-hide-phone"
                        data-ls="showinfo:1; delayin:0; fadein:false; offsetxin:-100lw; offsetxout:left; easingout:easeInQuint; skewxout:-10;"></div>

                    <div style="letter-spacing: -7px; top:90px; left:60px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; font-family:Verdana; font-size:40px; height:2px; width:55px; opacity:.75; border-radius:10px;"
                        class="ls-l bg-primary ls-hide-phone" data-ls="showinfo:1; durationin:1500; delayin:1000; fadein:false; clipin:0 100% 0 0; offsetxout:left;"></div>

                    <p style="top:240px; left:20px; text-align:initial; text-decoration:none; mix-blend-mode:normal; padding-right:20px; font-size: 20px; font-weight: 500" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;"></p>

                    <h1 style="top:280px; left:20px; text-align:initial; white-space: normal; width: 500px; text-decoration:none; mix-blend-mode:normal; color:#fff; padding-right:20px; font-size: 4rem;" class="ls-l ls-hide-phone font-400" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:1000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Find Your Dream House</h1>

                    <p style="top:450px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 16px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">New House, New Beginning, New Memories</p>

                </div>

                <!-- Slide 1-->
                <div class="ls-slide" data-ls="kenburnsscale:1.2; duration:12000;">
                    <img width="1920" height="1080" src="{{ asset('boxroomstyle/images/slider/london9.jpg') }}" class="ls-bg" alt="">

                    <div style="top:-100px; left:-7%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:140%; width:100%; opacity:1; border-radius: 50px; transform: rotate(20deg)" class="ls-l bg-primary ls-hide-phone"
                        data-ls="showinfo:1; delayin:0; fadein:false; offsetxin:-100lw; offsetxout:left; easingout:easeInQuint; skewxout:-10;"></div>

                    <div style="letter-spacing: -7px; top:90px; left:60px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; font-family:Verdana; font-size:40px; height:2px; width:55px; opacity:.75; border-radius:10px;"
                        class="ls-l bg-primary ls-hide-phone" data-ls="showinfo:1; durationin:1500; delayin:1000; fadein:false; clipin:0 100% 0 0; offsetxout:left;"></div>

                    <p style="top:240px; left:20px; text-align:initial; text-decoration:none; mix-blend-mode:normal; padding-right:20px; font-size: 20px; font-weight: 500" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;"></p>

                    <h1 style="top:280px; left:20px; text-align:initial; white-space: normal; width: 500px; text-decoration:none; mix-blend-mode:normal; color:#fff; padding-right:20px; font-size: 4rem;" class="ls-l ls-hide-phone font-400" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:1000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Find Your Perfect Home Land</h1>

                    <p style="top:450px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 15px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2700; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">New House, New Beginning, New Memories</p>

                </div>

            </div>
        </div>
        <!--============== Slider Area End ==============-->

        <!--============== Property Search Form Start ==============-->
        <div class="full-row p-0" style="margin-top: -60px; z-index: 99">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form class="bg-white rounded shadow-sm quick-search p-5 form-icon-right position-relative" action="{{ route('properties.filtering.home') }}" method="get">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-1 g-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="search" name="filter[search]" placeholder="Enter Keyword...">
                                </div>
                                <div class="col">
                                    <select class="form-control" id="catagery" name="filter[catagery]">
										<option value="">Property Status</option>
										<option value="for sale">For Sale</option>
										<option value="for let">For Let</option>
                                        <option value="for shared">For Shared</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="type" name="filter[type]">
                                            <option value="" selected>Property types</option>
                                        @foreach ($propertytypes as $key => $propertytype)
                                            <option value="{{ $key }}">
                                                {{ $propertytype }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="location" name="filter[location]" placeholder="Location">
                                        <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        {{--<div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                                <span class="price-slider">
                                                <input class="filter_price" type="text" name="price" value="0;10000000" />
                                            </span>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                                {{--<div class="col">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>--}}
                                <div class="col">
                                    <button class="btn btn-primary w-100">Search</button>
                                </div>
                                <!-- Advance Features -->
                                <div id="aditional-check" class="aditional-features p-5">
                                    <h5 class="mb-3">Aditional Options</h5>
                                    <ul class="row row-cols-lg-4 row-cols-md-2 row-cols-1 custom-check-box mb-4">
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Garage Facility</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Swiming Pool</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Fire Security</label>
                                        </li>

                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Fire Place Facility</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Play Ground</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Ferniture Include</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8">Marbel Floor</label>
                                        </li>

                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9">Store Room</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">Hight Class Door</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">Floor Heating System</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">Garden Include</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Search Form End ==============-->

        <!--============== Property Tab Start ==============-->
        @if(isset($properties))
        <div class="full-row bg-light">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-md-8">
                        <h2 class="main-title down-line">Latest Properties</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('/list') }}" class="my-3 btn-link text-secondary hover-text-primary transation font-700 float-md-end">More Properties ></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mix-tab">
                            <ul class="nav-tab-border-active me-auto d-table">
                                <li data-filter="all">All</li>
                                <li data-filter=".sale">Sale</li>
                                <li data-filter=".let">Let</li>
                                <li data-filter=".shared">Shared</li>
                            </ul>
                        </div>
                        <div class="mix-element row row-cols-lg-3 row-cols-md-2 row-cols-1 mt-4">
                            @foreach($properties as $property)
                                @if(($property -> catagery) == 'for let')
                                    <div class="col mix let">
                                @elseif(($property -> catagery) == 'for sale')
                                    <div class="col mix sale">
                                @elseif(($property -> catagery) == 'for shared')
                                    <div class="col mix shared">
                                @else
                                    <div class="col">
                                @endif
                                    <!-- Property Grid -->
                                    <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                        <div class="overflow-hidden position-relative rounded transation thumbnail-img bg-secondary hover-img-zoom m-2">
                                            <div class="cata position-absolute">
                                                @if(($property -> catagery) == 'for sale')
                                                    <span class="sale bg-secondary text-white">For Sale</span>
                                                @endif
                                                @if(($property -> catagery) == 'for let')
                                                    <span class="sale bg-secondary text-white">For Let</span>
                                                @endif
                                                @if(($property -> catagery) == 'for shared')
                                                    <span class="sale bg-secondary text-white">Shared</span>
                                                @endif
                                                <span class="featured bg-primary text-white">Featured</span>
                                                @if(($property -> age) == 'Pre')
                                                    <span class="bg-secondary text-white">New</span>
                                                @endif
                                            </div>
                                            @foreach($property->images as $image)
                                                @if(($image->is_main) == 1)
                                                <a href="{{ route('property.details', $property->id ) }}"><img src="{{asset($image->image)}}" alt="Image Not Found!"></a>
                                                @endif
                                            @endforeach
                                            @if(isset($property->saleprice))
                                                <span class="price-on text-white font-medium font-500">£{{ $property->saleprice }}</span>
                                            @endif
                                            @if(isset($property->letamount))
                                                <span class="price-on text-white font-medium font-500">£{{ $property->letamount }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>
                                            @endif
                                            <ul class="position-absolute quick-meta">
                                                {{--<li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>--}}
                                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="property_text p-3 pb-4">
                                            <span class="d-inline-block text-primary">{{ optional($property->propertytype)->type_name }}</span>
                                            {{--<h5 class="mt-2"><a class="font-400 text-secondary" href="property-single-v1.html">Luxury Condos Infront of River</a></h5>
                                            <span class="my-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i> {{ ' ' }}{{ $property-> street_name }}{{ ' ' }}{{ $property-> post_town }}{{ ', ' }}{{ $property-> post_city }}{{ ', ' }}{{ $property-> first_pastcode }}</span>--}}
                                            <span class="my-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i>{{ ' ' }}{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property->display_address_line2 }}</span>
                                            <div class="quantity font-fifteen">
                                                <ul class="d-flex">
                                                    <li><i class="fas fa-bed text-primary"></i> {{ $property-> bedrooms }}</li>
                                                    <li><i class="fas fa-bath text-primary"></i> {{ $property-> bathrooms }}</li>
                                                    <li><i class="fas fa-couch text-primary"></i></i> {{ $property-> halls }}</li>
                                                    <li><i class="far fa-clone text-primary"></i> {{ $property-> internal_area }} {{ $property-> area_unit }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--============== Property Tab End ==============-->

        <!--============== Reg Banner Start ==============-->
        <div class="full-row bg-center overlay-secondary paraxify" style="background-image:url('{{ asset('boxroomstyle/images/background/london.jpg')}}'); background-repeat: no-repeat; background-position: center -17.42px;">
            <div class="container position-relative z-index-9">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-white">
                        <h3 class="down-line text-white mb-3">Do you want to sell your property ?</h3>
                        <p>If you want to sell your home fast, the first step is call to us. we sell your home quickly, price it competitively.</p>
                        <p>You can also fill out our online form. We are ready to keep you and your business safe and secure.</p>
                        <a href="#" class="btn btn-primary">Submit Property</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="h4 text-white w-100 text-lg-end md-mt-20">Call : 902 - 000 - 99999</div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Reg Banner End ==============-->

        <!--============== Register Section Start ==============-->
        <div class="full-row bg-primary py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3 class="text-white xs-text-center my-20 font-400">Are you looking for a House or Customer for your Property sale?</h3>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btn-white y-center position-relative d-table xs-mx-auto ms-auto">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Register Section End ==============-->

        <!--============== Footer Section Start ==============-->
        <footer class="full-row p-0 footer-two bg-light">
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget mb-5">
                                <h1 class="widget-title mb-4 font-400 footer-title" style="color:#ff7f50; text-align: justify !important;"><span>BoxRoom</span><span class="text-a">4</span><span>Rent</span></h1>
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
                                            <li style="text-align: justify !important;">BoxRoom for Rent Real Estate Agency, 301 The Greenhouse, Custard Factory, London, E3 8DY.</li>
                                            <li><h6>+1 246-345-0695</h6></li>
                                            <li><h6>boxroom4rent@gmail.com</h6></li>
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
                        <div class="col foot">
                            <span>Copyright © 2021 BoxRoom4Rent All right reserved</span>
                        </div>
                        <div class="col foot">
                            <ul class="line-menu float-lg-end list-color-secondary">
                                <li><a href="#">Advertise</a></li>
                                <li>|</li>
                                <li><a href="#">Questions</a></li>
                                <li>|</li>
                                <li><a href="#">Disclaimer</a></li>
                                <li>|</li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li>|</li>
                                <li><a href="#">Site Map</a></li>
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
    </script>

    @yield('scripts')    
</body>
</html>