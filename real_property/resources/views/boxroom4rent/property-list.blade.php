@extends('layouts.boxroomlayout')
@section('content')

        <div>
            <!--============== Page title Start ==============-->
            <div class="full-row py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        {{--<nav aria-label="breadcrumb" class="mb-2">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Listing</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Grid View</li>
                            </ol>
                        </nav>--}}
                        <h3 class="text-secondary">Property Listing</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page title End ==============-->

        <!--============== Property Search Form Start ==============-->
        <div class="full-row p-0 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="quick-search form-icon-right position-relative" action="{{ route('properties.filtering') }}" method="get">
                            <div class="row row-cols-lg-6 row-cols-md-4 row-cols-1 g-3">
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
                                    <select class="form-control">
										<option>Property Status</option>
										<option>For Rent</option>
										<option>For Sale</option>
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
                                    <select class="form-control">
										<option>Bedrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Bathrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Garage</option>
										<option>Yes</option>
										<option>No</option>
									</select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Min Area">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Max Area">
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary w-100">Search</button>
                                </div>
                            </div>
                            <div id="aditional-check" class="aditional-features p-5">
                                <h5 class="mb-3">Aditional Options</h5>
                                <ul class="row row-cols-md-4 row-cols-1 custom-check-box mb-4">
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
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Search Form End ==============-->

        <!--============== Property Grid View Start ==============-->
        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="woo-filter-bar p-3 d-flex flex-wrap justify-content-between">
                            <div class="d-flex flex-wrap">
                                <!-- Default dropend button -->
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catagery
                                    </button>
                                    <ul class="dropdown-menu mix-tab">
                                        <ul class="nav-tab-border-active me-auto d-table">
                                            <li class="dropdown-item" data-filter="all">All</li>
                                            <li class="dropdown-item" data-filter=".sale">Sale</li>
                                            <li class="dropdown-item" data-filter=".let">Let</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="woocommerce-ordering-pages me-4 font-fifteen">{{ 'Showing at' }} @if(isset($properties)) {{ count($properties) }} @endif {{ 'result' }}</span>
                                <form class="view-category" method="get">
                                    <button title="List" class="list-view" value="list" name="display" type="submit"><i class="flaticon-grid-1 flat-mini"></i></button>
                                    <button title="Grid" class="grid-view active" value="grid" name="display" type="submit"><i class="flaticon-grid flat-mini"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix-element row row-cols-xl-3 row-cols-md-2 row-cols-1">
                    @if(isset($properties))
                        @foreach($properties as $property)
                        @if(($property -> catagery) == 'for let')
                            <div class="col mix let">
                        @elseif(($property -> catagery) == 'for sale')
                            <div class="col mix sale">
                        @elseif(($property -> catagery) == 'shared accommodation')
                            <div class="col mix shared">
                        @else
                            <div class="col">
                        @endif
                            <!-- Property Grid -->
                            <div class="property-grid-1 bg-white property-block border transation-this hover-shadow mb-30">
                                <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
                                    <div class="cata position-absolute">
                                        @if(($property -> catagery) == 'for sale')
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                        @endif
                                        @if(($property -> catagery) == 'for let')
                                            <span class="sale bg-secondary text-white">For Let</span>
                                        @endif
                                        @if(($property -> catagery) == 'shared accommodation')
                                            <span class="sale bg-secondary text-white">Shared</span>
                                        @endif
                                        <span class="featured bg-primary text-white">Featured</span>
                                        @if(($property -> age) == 'New' || ($property -> age) == 'Newly build')
                                            <span class="bg-secondary text-white">New</span>
                                        @endif
                                    </div>
                                    @foreach($property->images as $image)
                                        @if(($image->is_main) == 1)
                                        <a href="{{ route('property.details', $property->id ) }}"><img src="{{asset($image->image)}}" alt="Image Not Found!"></a>
                                        @endif
                                    @endforeach
                                    <span class="price-on text-white font-medium font-500">£{{ $property->price }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>
                                    <ul class="position-absolute quick-meta">
                                        {{--<li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>--}}
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-3">
                                    <span class="d-inline-block text-primary">{{ optional($property->propertytype)->type_name }}</span>
                                    <span class="my-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i>{{ ' ' }}{{ $property-> street_name }}{{ ' ' }}{{ $property-> post_town }}{{ ', ' }}{{ $property-> post_city }}{{ ', ' }}{{ $property-> first_pastcode }}</span>
                                    <div class="quantity">
                                        <ul class="d-flex">
                                            @if(isset($property-> no_of_bedrooms))
                                            <li><i class="fas fa-bed text-primary"></i> {{ $property-> no_of_bedrooms }}</li>
                                            @endif
                                            @if(isset($property-> no_of_bathrooms))
                                            <li><i class="fas fa-bath text-primary"></i> {{ $property-> no_of_bathrooms }}</li>
                                            @endif
                                            @if(isset($property-> no_of_halls))
                                            <li><i class="fas fa-couch text-primary"></i></i> {{ $property-> no_of_halls }}</li>
                                            @endif
                                            @if(isset($property-> internal_area))
                                            <li><i class="far fa-clone text-primary"></i> {{ $property-> internal_area }} {{ $property-> area_unit }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 p-3 border-top">
                                    <div class="post-date ms-auto"><span>{{ $property -> created_at->diffForHumans()}}</span></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        @for ($i = 0; $i <= 12; $i++)
                        <div class="col">
                            <!-- Property Grid -->
                            <div class="property-grid-1 bg-white property-block border transation-this hover-shadow mb-30">
                                <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Sale</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single-v1.html"><img src="{{ asset('boxroomstyle/images/property_grid/property-grid-2.png') }}" alt="Image Not Found!"></a>
                                    <span class="price-on text-white font-medium font-500">$120,5500</span>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-3">
                                    <span class="d-inline-block text-primary">Condos</span>
                                    <h5 class="mt-2"><a class="font-400 text-secondary" href="property-single-v1.html">Luxury Condos Infront of River</a></h5>
                                    <span class="my-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i> 2305 Tree Frog Lane Overlandpk, MO </span>
                                    <div class="quantity">
                                        <ul class="d-flex">
                                            <li><span>Rooms:</span> 5</li>
                                            <li><span>Beds:</span> 3</li>
                                            <li><span>Area:</span> 1100 Sqft<sup>2</sup></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 p-3 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    @endif
                </div>
                <div class="row">
                    <div class="col mt-5">
                    {!! $properties->render("pagination::bootstrap-4") !!}
                    </div>
                </div>
                {{--<div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dotted-active justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous Page</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next Page</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>--}}
            </div>
        </div>
        <!--============== Property Grid View End ==============-->
    </div>
        
@endsection