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
        <header class="nav-on-banner bg-transparent fixed-bg-dark shadow-none md-bg-secondary">
            <div class="main-nav py-2 xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                {{--<a class="navbar-brand" href="{{ url('/') }}"><img class="nav-logo" src="assets/images/logo/logo-full-white.png" alt="Image not found !"></a>--}}
                                <a class="navbar-brand text-brand" href="{{ url('/') }}"><span class="text-b">i</span><span>HOMES</span></a>
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
                                    {{--<div id="mySlider"></div> <br>
                                        <div class="inputs">
                                            <label for="lowerlimit">Lower Limit: </label><input id="lowerlimit" type="number" name="filter[price_between][]" />
                                            <label for="upperlimit">Upper Limit: </label><input id="upperlimit" type="number" name="filter[price_between][]" />
                                        </div>
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                            <span class="price-slider">
                                                <input class="filter_price" type="number" id="saleprice" name="filter[price_between][]" value="100" />
                                                <input class="filter_price" type="number" id="saleprice" name="filter[price_between][]" value="600000" />
                                            </span>
                                            </div>
                                        </div>--}}
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" min="0" step="100" class="form-control" id="min-price" name="filter[price_between][]" placeholder="Min Price">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" min="0" step="100" class="form-control" id="max-price" name="filter[price_between][]" placeholder="Max Price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary w-100">Search</button>
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
                                                @if(($property -> age) == 'Pre')
                                                    <span class="bg-secondary text-white">New</span>
                                                @endif
                                            </div>
                                            <div class="cat position-absolute">
                                                <span class="featured bg-primary text-white">
                                                    @if(($property->is_sold) == '0' && ($property->is_let) == '0')
                                                        {{ 'Available' }}
                                                    @elseif(($property->is_sold) == '1' || ($property->is_let) == '1')
                                                        {{ 'Unavailable' }}
                                                    @endif
                                                </span>
                                            </div>
                                            @foreach($property->images as $image)
                                                @if(($image->is_main) == 1)
                                                <a href="{{ route('property.details', $property->id ) }}"><img src="{{asset($image->image)}}" alt="Image Not Found!"></a>
                                                @endif
                                            @endforeach
                                            @if(isset($property->price))
                                                <span class="price-on text-white font-medium font-500">£{{ $property->price }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>
                                            @endif
                                            <ul class="position-absolute quick-meta">
                                                {{--<li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>--}}
                                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="property_text p-3 pb-4">
                                            <span class="d-inline-block text-primary">{{ optional($property->propertytype)->type_name }}</span>
                                            {{--<h5 class="mt-2"><a class="font-400 text-secondary" href="property-single-v1.html">Luxury Condos Infront of River</a></h5>--}}
                                            <span class="my-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i> {{ ' ' }}{{ $property-> street_name }}{{ ' ' }}{{ $property-> post_town }}{{ ', ' }}{{ $property-> post_city }}{{ ', ' }}{{ $property-> first_postcode }}</span>
                                            {{--<span class="my-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i>{{ ' ' }}{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property->display_address_line2 }}</span>--}}
                                            <div class="quantity font-fifteen">
                                                <ul class="d-flex">
                                                    <li><i class="fas fa-bed text-primary"></i> {{ $property-> bedrooms }}</li>
                                                    <li><i class="fas fa-bath text-primary"></i> {{ $property-> bathrooms }}</li>
                                                    <li><i class="fas fa-couch text-primary"></i></i> {{ $property-> halls }}</li>
                                                    <li><i class="fas fa-car text-primary"></i></li>
                                                    <li><i class="fas fa-tree text-primary"></i></li>
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

        <!--============== Service Content Start ==============-->
        <div class="full-row">
            <div class="container">
                <div class="row row-cols-xl-12 row-cols-md-12 row-cols-1">
                    <div class="col-lg-5 col-md-12 mb-3">
                        <div class="text-secondary mb-3">
                            <h2 class="main-title down-line text-secondary">Our Services</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="px-5 sm-px-0 mb-5">
                            <span class="text-primary text-uppercase pb-2 d-table font-fifteen" style="text-align: justify !important;">Whether you are buying, selling, letting or renting property, or simply want to arrange a mortgage, we would be delighted to help you. After all, it's what we do best. Covering the entire property spectrum from first time buyer flats to large country properties with acreage, at iHOMES we pride ourselves on being able to make your property sale or purchase a success every time.</span>
                        </div>
                    </div>
                </div>
                <div class="row divider-col-3 row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col-md-4">
                        <div class="px-5 sm-px-0 mb-5">
                            <div class="item-1">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom img-fluid">
                                        <a href=""><img src="{{ asset('boxroomstyle/images/services/service8.jpg') }}" alt="Image Not Found!" class=""></a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-start text-primary font-400">RENT REVIEW</h4>
                            <div class="posi-11">
                                <p style="text-align: justify !important;">We conduct regular reviews with our landlords to evaluate 
                                their portfolio and tenancies to ensure that we are helping 
                                to achieve maximum rental income and a seamless rental.</p>
                            </div>
                            <div class="posi-1">
                                <button type="button" class="btn btn-primary d-table" data-bs-toggle="modal" data-bs-target="#thinking-of-selling">
                                    Find out More
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="thinking-of-selling" tabindex="-1" aria-labelledby="thinking-of-selling-Label" aria-hidden="true" style=" float: left !important; z-index: 100001 !important;">
                                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-primary" id="thinking-of-selling-Label">THINKING OF SELLING</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="text-align: justify !important;">
                                                    If you are thinking about selling your property, the first step is to contact iHOMES so that we can arrange for a valuation to be carried out ASAP.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    When you are ready to market your property, we can arrange a convenient time with you to take measurement and take the internal photographs of your property. 
                                                    We can also assist you in obtaining an Energy Performance Certificate which is a compulsory requirement when selling your home We will market your property on various websites, 
                                                    within our high profile offices, within the local Property News and directly to our database of buyers.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    We will accompany the viewings where required and we will always request feedback from viewers and let you know this as soon as possible.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    Our sales team have a passion for selling and a tenacity that will result in us finding you a buyer and negotiating the sale for you. 
                                                    Experienced staff will substantiate the financial status of any prospective purchaser and once a sale has been agreed, 
                                                    facilitate the process through to exchange of contracts and ultimately completion of the sale.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    We understand how stressful and sometimes emotive the house selling process can be. 
                                                    That is why we try to make the transaction as straight forward as possible and liaise with solicitors, other agents and your buyer on your behalf.
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="footer-widget footer-nav mb-2">
                                                        <h4 class="widget-title mb-1">We Offer our clients:</h4>
                                                        <ul>
                                                            <li>Competitive all inclusive sales rates</li>
                                                            <li>No Sale, no fee arrangements</li>
                                                            <li>Local advertising</li>
                                                            <li>Advertising on top property portal web sites</li>
                                                            <li>A refreshing service from a firm that cares</li>
                                                            <li>Accompanied viewings 6 days a week if required</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-5 sm-px-0 mb-5">
                            <div class="item-1">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <a href=""><img src="{{ asset('boxroomstyle/images/services/service1.jpg') }}" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-start text-primary font-400">MAXIMUM EXPOSURE</h4>
                            <p style="text-align: justify !important;">Your property will be extensively marketed within our offices and with all the major portals.</p>
                            <P style="text-align: justify !important;">iHOMES have  web sites which have been search engine optimised (SEO), meaning your property will more visible to potential tenants.</P>
                            <button type="button" class="btn btn-primary d-table" data-bs-toggle="modal" data-bs-target="#thinking-of-letting">
                                    Find out More
                            </button>
                                <!-- Modal -->
                            <div class="modal fade" id="thinking-of-letting" tabindex="-1" aria-labelledby="thinking-of-letting-Label" aria-hidden="true" style=" float: left !important; z-index: 100001 !important;">
                                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-primary" id="thinking-of-letting-Label">THINKING OF LETTING</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="text-align: justify !important;">
                                                    iHomes is an established independent firm of sales and letting specialists. 
                                                    We provide our clients with a comprehensive personal service tailored to your requirements. 
                                                    We ensure that we work to the highest of standards to guarantee that the letting of your property runs as smoothly as possible.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    Whatever the reason for letting your property you may rest assured that iHOMES will provide a proactive management approach to give you complete peace of mind.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    Depending on the package you take we can offer services including advertising, accompanied viewings, rent collection, tenant referencing, 
                                                    preparation of tenancies agreements, assistance with safety checks, handling maintenance issues and more.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    Our lettings services are set out in three categories, Fully Managed, Rent Collect and Tenant Find.  For details on what each service covers, please call us and speak to our experts
                                                    </p>
                                                    <h5>How to let guide</h5>
                                                    <p style="text-align: justify !important;">
                                                    This guide is focused on landlords letting to tenants on an assured shorthold tenancy. 
                                                    An AST is the main type of tenancy arrangement between landlords and tenants. By setting up an AST, you enter a contractual arrangement to let your property to a tenant.
                                                    </p>
                                                    <h5>Letting Appraisal</h5>
                                                    <p style="text-align: justify !important;">
                                                    The first step is to book an appointment for our valuer to visit your property and advise you of the current market rent. 
                                                    We will advise you of the procedure to be followed together with an explanation of the services we provide and any tips on how to increase the level of rent you can achieve.
                                                    </p>
                                                    <p style="text-align: justify !important;">
                                                    Call us today to book an appointment at a convenient time that suits you.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-5 sm-px-0 mb-5">
                            <div class="item-1">
                                <div class="property-grid-2 property-block transation mb-3">
                                    <div class="overflow-hidden position-relative transation thumbnail-img rounded bg-secondary hover-img-zoom">
                                        <a href=""><img src="{{ asset('boxroomstyle/images/services/service4.jpg') }}" alt="Image Not Found!"></a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-start text-primary font-400">FREE RENTAL VALUATION</h4>
                            <p style="text-align: justify !important;">If you are thinking of letting your property to get a great rental return, your first step should be to get a free consultation.</p>
                            {{--<p style="text-align: justify !important;">Email us we will call you.</p>--}}
                            <div class="posi-2">
                                <button type="button" id="showModal" class="btn btn-primary d-table" data-bs-toggle="modal" data-bs-target="#free-rental-valuation">
                                    Find out More
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="free-rental-valuation" tabindex="-1" aria-labelledby="free-rental-valuation-Label" aria-hidden="true" style=" float: left !important; z-index: 100001 !important;">
                                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-primary" id="free-rental-valuation-Label">FREE RENTAL VALUATION</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row row-cols-1">
                                                <div class="col">
                                                    @if(count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                <li>{{ $error}}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    @if($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                                        <strong>{{ $message }}</strong>
                                                        </div>
                                                    @endif
                                                    <form class="contact_message form-boder" action="{{ url('/sendmail/send') }}" method="post" role="form" novalidate="novalidate">
                                                    {{ csrf_field() }}
                                                        <div class="row g-3">
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact No">
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="hidden" class="form-control" id="subject" name="subject" value="free rental valuation" placeholder="subject">
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <div class="g-recaptcha" id="captcha"></div>
                                                                @if($errors->has('g-recaptcha-response'))
                                                                <span class="">
                                                                    <!-- <strong>{{$errors->first('g-recaptcha-response')}}</strong> -->
                                                                </span>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12 col-sm-6">
                                                                <button class="btn btn-primary" id="send" value="send" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Service Content End ==============-->

        <!--============== Reg Banner Start ==============-->
        <div class="full-row bg-center overlay-secondary paraxify" style="background-image:url('{{ asset('boxroomstyle/images/background/london.jpg')}}'); background-repeat: no-repeat; background-position: center -17.42px;">
            <div class="container position-relative z-index-9">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-white">
                        <h3 class="down-line text-white mb-3">Do you want to sell your property ?</h3>
                        <p>If you want to sell your home fast, the first step is call to us. we sell your home quickly, price it competitively.</p>
                        <p>You can also fill out our online form. We are ready to keep you and your business safe and secure.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="h4 text-white w-100 text-lg-end md-mt-20">Call : (0208) 599 2555</div>
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
                        <a href="{{ url('/contact') }}" class="btn btn-white y-center position-relative d-table xs-mx-auto ms-auto">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Register Section End ==============-->

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
                                <div class="col-sm-6">
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
                                                    <th scope="row"><span
                                                            class="fas fa-phone banner-tagline font-large text-primary">{{ '  ' }}</span>
                                                    </th>
                                                    <td>
                                                        <h6 class="text-white">(0208) 599 2555</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><span
                                                            class="fas fa-envelope-open banner-tagline font-large text-primary">{{ '  ' }}</span>
                                                    </th>
                                                    <td>
                                                        <h6><a class="text-white" href="mailto:info@i-homes.net?subject=Website%20enquiry">info@i-homes.net</a></h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title ms-4 mb-4">The Company</h4>
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
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

    @yield('scripts')    
</body>
</html>