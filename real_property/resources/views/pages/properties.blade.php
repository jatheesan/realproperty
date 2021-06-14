@extends('layouts.applayout')

@section('content')
    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single mb-0 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Our Amazing Properties</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Properties
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!--============== Property Search Form Start ==============-->
        {{--<section class="property-grid grid" style="margin-top: -60px; z-index: 99">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form class="bg-white rounded shadow-sm quick-search px-5 py-4 form-icon-right position-relative" action="#" method="post">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-1 g-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
                                </div>
                                <div class="col">
                                    <select class="form-control">
                                        <option>Property Types</option>
                                        <option>House</option>
                                        <option>Office</option>
                                        <option>Appartment</option>
                                        <option>Condos</option>
                                        <option>Villa</option>
                                        <option>Small Family</option>
                                        <option>Single Room</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="location" placeholder="Location">
                                        <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                                <span class="price-slider">
                                                <input class="filter_price" type="text" name="price" value="0;10000000" />
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>
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
        </section>--}}
        <!--============== Property Search Form End ==============-->

        <!-- ======= Property Grid ======= -->
        <section class="property-grid grid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card shadow mb-4 pb-0">
                            <div class="grid-option">
                                <form action="{{ route('properties.filtering') }}" method="get">
                                    <div>
                                        <div class="row p-0">
                                            <div class="col-sm-2 d-none d-sm-none d-md-block pr-0">
                                                <select class="custom-select border border-right-0 border-org" id="catagery" name="catagery">
                                                    @foreach (['for sale' => 'Sale',
                                                                'for let' => 'Let',
                                                                'shared accommodation' => 'Shared Accommodation'] as $key => $text)
                                                                
                                                        <option value="{{ $key }}">
                                                            {{ $text }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-8 border-bottom border-top border-org d-none d-sm-none d-md-block">
                                                <input class="custom-input" type="text" name="search" id="search" placeholder="Search by location, postcode or keyword">
                                            </div>
                                            <div class="col-sm-2 d-none d-sm-none d-md-block pl-0">
                                                <input class="custom-button border border-left-0 border-org" type="submit" value="Search">
                                            </div>
                                            <div class="col-8 d-block d-sm-block d-md-none pr-0">
                                                <input class="custom-input border border-right-0 border-org" type="text" name="search" id="search" placeholder="Search by location, postcode or keyword">
                                            </div>
                                            <div class="col-4 d-block d-sm-block d-md-none pl-0">
                                                <button class="filter border border-left-0 border-org" type="button" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-bars"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-6 col-md-2 d-none d-md-flex justify-content-center">
                                                <select class="search-inputcol" id="min-price" name="min-price">
                                                    <option value="0">No Min</option>
                                                    <option value="500">€ 500</option>
                                                    <option value="1000">€ 1,000</option>
                                                    <option value="2500">€ 2,500</option>
                                                    <option value="5000">€ 5,000</option>
                                                    <option value="7500">€ 7,500</option>
                                                    <option value="10000">€ 10,000</option>
                                                    <option value="50000">€ 50,000</option>
                                                    <option value="100000">€ 100,000</option>
                                                    <option value="250000">€ 250,000</option>
                                                    <option value="500000">€ 500,000</option>
                                                    <option value="750000">€ 750,000</option>
                                                    <option value="1000000">€ 1,000,000</option>
                                                    <option value="2500000">€ 2,500,000</option>
                                                    <option value="5000000">€ 5,000,000</option>
                                                    <option value="7500000">€ 7,500,000</option>
                                                    <option value="10000000">€ 10,000,000</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-md-2 d-none d-md-flex justify-content-center">
                                                <select class="search-inputcol" id="max-price" name="max-price">
                                                    <option value="500">€ 500</option>
                                                    <option value="1000">€ 1,000</option>
                                                    <option value="2500">€ 2,500</option>
                                                    <option value="5000">€ 5,000</option>
                                                    <option value="7500">€ 7,500</option>
                                                    <option value="10000">€ 10,000</option>
                                                    <option value="50000">€ 50,000</option>
                                                    <option value="100000">€ 100,000</option>
                                                    <option value="250000">€ 250,000</option>
                                                    <option value="500000">€ 500,000</option>
                                                    <option value="750000">€ 750,000</option>
                                                    <option value="1000000">€ 1,000,000</option>
                                                    <option value="2500000">€ 2,500,000</option>
                                                    <option value="5000000">€ 5,000,000</option>
                                                    <option value="7500000">€ 7,500,000</option>
                                                    <option value="10000000">€ 10,000,000</option>
                                                    <option value="grater">No Max</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 d-none d-md-flex justify-content-center">
                                                <select class="search-input" id="type" name="type">
                                                        <option value="" selected>All property types</option>
                                                    @foreach ($propertytypes as $key => $propertytype)
                                                        <option value="{{ $key }}">
                                                            {{ $propertytype }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4 d-none d-md-flex justify-content-center">
                                                <input class="search-input" type="number" id="bed_rooms" name="bed_rooms" min="1" max="10" placeholder="All BedRooms">
                                            </div>
                                            <div class="col-sm-4 d-none d-md-flex justify-content-center">
                                                <input class="search-input" type="number" id="bath_rooms" name="bath_rooms" min="1" max="10" placeholder="All BathRooms">
                                            </div>
                                            <div class="col-sm-4 d-none d-md-flex justify-content-center">
                                                <input class="search-input" type="number" id="halls" name="halls" min="1" max="10" placeholder="All Hall">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="collapse" id="collapseExample">
                                    <form action="{{ route('properties.filtering') }}" method="get">
                                        <div class="row">
                                            <div class="col-md-12 d-md-none d-flex justify-content-center">
                                                <select class="search-input" id="catagery" name="catagery">
                                                    @foreach (['for sale' => 'Sale',
                                                                'for let' => 'Let',
                                                                'shared accommodation' => 'Shared Accommodation'] as $key => $text)
                                                        <option value="{{ $key }}">
                                                            {{ $text }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 col-md-2 d-md-none d-flex justify-content-center">
                                                <select class="search-inputcol" id="min-price" name="min-price">
                                                    <option>No Min</option>
                                                    <option>€ 500</option>
                                                    <option>€ 1000</option>
                                                    <option>€ 2,500</option>
                                                    <option>€ 5,000</option>
                                                    <option>€ 7,500</option>
                                                    <option>€ 10,000</option>
                                                    <option>€ 50,000</option>
                                                    <option>€ 100,000</option>
                                                    <option>€ 250,000</option>
                                                    <option>€ 500,000</option>
                                                    <option>€ 750,000</option>
                                                    <option>€ 1,000,000</option>
                                                    <option>€ 2,500,000</option>
                                                    <option>€ 5,000,000</option>
                                                    <option>€ 7,500,000</option>
                                                    <option>€ 10,000,000</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-md-2 d-md-none d-flex justify-content-center">
                                                <select class="search-inputcol" id="max-price" name="max-price">
                                                    <option>€ 500</option>
                                                    <option>€ 1000</option>
                                                    <option>€ 2,500</option>
                                                    <option>€ 5,000</option>
                                                    <option>€ 7,500</option>
                                                    <option>€ 10,000</option>
                                                    <option>€ 50,000</option>
                                                    <option>€ 100,000</option>
                                                    <option>€ 250,000</option>
                                                    <option>€ 500,000</option>
                                                    <option>€ 750,000</option>
                                                    <option>€ 1,000,000</option>
                                                    <option>€ 2,500,000</option>
                                                    <option>€ 5,000,000</option>
                                                    <option>€ 7,500,000</option>
                                                    <option>€ 10,000,000</option>
                                                    <option>No Max</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 d-md-none d-flex justify-content-center">
                                                <input class="search-input" type="text" name="type" id="type" placeholder="All Property Type">
                                            </div>
                                            <div class="col-md-4 d-md-none d-flex justify-content-center">
                                                {{--<div class="quantity-block">
                                                    <a class="quantity-arrow-minus" onclick="arrow();"> - </a>
                                                    <input class="quantity-num" type="number" value="1" />
                                                    <a class="quantity-arrow-plus" onclick="arrow();"> + </a>
                                                </div>--}}
                                                <input class="search-input" type="number" id="bed_rooms" name="bed_rooms" min="1" max="10" placeholder="All BedRooms">
                                            </div>
                                            <div class="col-md-4 d-md-none d-flex justify-content-center">
                                                <input class="search-input" type="number" id="bath_rooms" name="bath_rooms" min="1" max="10" placeholder="All BathRooms">
                                            </div>
                                            <div class="col-md-4 d-md-none d-flex justify-content-center">
                                                <input class="search-input" type="number" id="halls" name="halls" min="1" max="10" placeholder="All Hall">
                                            </div>
                                            <div class="offset-sm-4 col-sm-4 d-md-none d-flex justify-content-center pt-4">
                                                <input class="colapse-button" type="submit" value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($properties))
                        @foreach($properties as $property)
                        <div class="col-md-4">
                            <div class="card-box-a card-shadow" style="height:500px !important;">
                                <div class="img-box-a">
                                @foreach($property->images as $image)
                                    @if(($image->is_main) == 1)
                                    <img src="{{asset($image->image)}}" alt="" class="img-a img-fluid" style="height:500px !important;">
                                    @endif
                                @endforeach
                                </div>
                                <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">{{ $property->post_town }}
                                                <br /> {{ $property->post_city }}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | €{{ $property->price }}</span>
                                        </div>
                                        <a href="{{ route('property.view', $property->id ) }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{ $property-> internal_area }} {{ $property-> area_unit }}</span>
                                            </li>
                                            {{--<li>
                                                <figure class="figure">
                                                    <img src="{{ asset('svgs/bed.svg') }}" class="figure-img img-fluid rounded" alt="figure" width="3" height="1">
                                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                                </figure>
                                            </li>--}}
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{ $property-> no_of_bedrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{ $property-> no_of_bathrooms }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">halls</h4>
                                                <span>{{ $property-> no_of_halls }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        <div>
                            {!! $properties->render("pagination::bootstrap-4") !!}
                        </div>
                    @else
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-1.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road </a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-2.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-3.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-4.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-5.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/prop-6.jpg') }}" alt="" class="img-a img-fluid" style="height:500px !important;">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ url('/single-property') }}">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">Sales | 25 Million</span>
                                        </div>
                                        <a href="{{ url('/single-property') }}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section><!-- End Property Grid Single-->

    </main><!-- End #main -->

    <script>
        function arrow(){
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");

        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);

        function quantityMinus() {
            if ($quantityNum.val() > 1) {
            $quantityNum.val(+$quantityNum.val() - 1);
            }
        }

        function quantityPlus() {
            $quantityNum.val(+$quantityNum.val() + 1);
        }
        }

    </script>
@endsection