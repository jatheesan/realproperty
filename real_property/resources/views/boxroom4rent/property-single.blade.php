@extends('layouts.boxroomlayout')
@section('content')

    @if(isset($property))
    <!--============== Property Slider Start ==============-->
    {{--<div class="full-row pt-0 bg-white">
            <div class="container">
                <div class="row g-0">
                    @foreach($property->images as $image)
                        <div class="col-1">
                            <div class="hover-img-zoom overflow-hidden transation">
                                <a href="{{asset($image->image)}}" data-fancybox="gallery" data-caption="Caption for single image">
                                    <img class="transation" src="{{asset($image->image)}}" alt="Image not found!">
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-8">
                        <div class="hover-img-zoom overflow-hidden transation">
                            <a href="{{ asset('boxroomstyle/images/property_grid/property-grid-2.png') }}" data-fancybox="gallery" data-caption="Caption for single image">
                                <img class="transation" src="{{ asset('boxroomstyle/images/property_grid/property-grid-2.png') }}" alt="Image not found!">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row row-cols-1 g-0">
                            <div class="col">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="{{ asset('boxroomstyle/images/property_grid/property-grid-3.png') }}" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="{{ asset('boxroomstyle/images/property_grid/property-grid-3.png') }}" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="{{ asset('boxroomstyle/images/property_grid/property-grid-4.png') }}" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="{{ asset('boxroomstyle/images/property_grid/property-grid-4.png') }}" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>--}}
        <!--============== Property Slider End ==============-->

    <!--============== Property Slider Start ==============-->
    <div class="full-row p-0">
        <div class="container-float">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div id="single-property" style="width:1200px; height:450px; margin:0 auto 30px;">
                        @foreach($property->images as $image)
                        <div class="ls-slide"
                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img
                                width="1920" height="1280" src="{{asset($image->image)}}"
                                class="ls-bg" alt="" /> </div>
                        @endforeach
                        <!-- Slide 1-->
                        <div class="ls-slide"
                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img
                                width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/5.png') }}"
                                class="ls-bg" alt="" /> </div>

                        <!-- Slide 2-->
                        <div class="ls-slide"
                            data-ls="duration:7500; transition2d:5; kenburnszoom:out; kenburnsscale:1.2;"> <img
                                width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/6.png') }}"
                                class="ls-bg" alt="" /> </div>

                        <!-- Slide 3-->
                        <div class="ls-slide"
                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img
                                width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/8.png') }}"
                                class="ls-bg" alt="" /> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Property Slider End ==============-->

    <!--============== Pricing Start ==============-->
    <div class="full-row py-10 position-relative w-100 overlay-dark sm-mt-20 bg-sm-secondary"
        style="margin-top:-144px; z-index:99">
        <div class="container position-relative">
            <div class="row">
                <div class="col-auto">
                    <span class="d-inline-block text-primary">{{ optional($property->propertytype)->type_name }}</span>
                    {{--<h4 class="font-400 text-white"><i class="fas fa-map-marker-alt text-white"></i>{{ ' ' }}{{ $property-> street_name }}{{ ' ' }}{{ $property-> post_town }}{{ ', ' }}{{ $property-> post_city }}{{ ', ' }}{{ $property-> first_pastcode }}</h4>--}}
                    <h4 class="font-400 text-white"><i class="fas fa-map-marker-alt text-white"></i>{{ ' ' }}{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property-> display_address_line2 }}</h4>
                    <div class="quantity">
                        <ul class="font-500 d-flex">
                            @if(isset($property-> bedrooms))
                            <li><i class="fas fa-bed text-primary"></i><span class="text-white"> {{ $property-> bedrooms }} </span></li>
                            @endif
                            @if(isset($property-> bathrooms))
                            <li><i class="fas fa-bath text-primary"></i><span class="text-white"> {{ $property-> bathrooms }} </span></li>
                            @endif
                            @if(isset($property-> halls))
                            <li><i class="fas fa-couch text-primary"></i><span class="text-white"></i> {{ $property-> halls }} </span></li>
                            @endif
                            @if(isset($property-> internal_area))
                            <li><i class="far fa-clone text-primary"></i><span class="text-white"> {{ $property-> internal_area }} {{ $property-> area_unit }} </span></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-auto ms-sm-auto text-sm-end">
                @if(isset($property->saleprice))
                    <span class="text-primary font-large font-500 d-table ms-sm-auto">£{{ $property->saleprice }}</span>
                @endif
                @if(isset($property->letamount))
                    <span class="text-primary font-large font-500 d-table ms-sm-auto">£{{ $property->letamount }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>
                @endif
                    {{--<span class="text-primary font-large font-500 d-table ms-sm-auto">£{{ $property->price }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>--}}
                    <span class="d-table mb-2 ms-sm-auto text-white">Fixed Amount</span>
                    <span class="text-white font-mini px-2 rounded product-status ms-sm-auto py-1 bg-primary"><i
                            class="fas fa-check"></i>
                    @if(($property->is_sold) == '0' && ($property->is_let) == '0')
                        {{ 'Available' }}
                    @elseif(($property->is_sold) == '1' || ($property->is_let) == '1')
                        {{ 'Unavailable' }}
                    @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--============== Pricing End ==============-->

    <!--============== Property Details Start ==============-->
    <div class="full-row pt-30">
            <div class="container">
                <div class="row">
                    {{--<div class="col-xl-4 order-xl-2">
                        <!-- Message Form -->
                        <div class="widget widget_contact bg-white border p-30 shadow-one rounded mb-30">
                            <h5 class="mb-4">Listed By</h5>
                            <div class="media mb-3">
                                <img class="rounded-circle me-3" src="assets/images/user1.jpg" alt="avata">
                                <div class="media-body">
                                    <div class="h6 mt-0">Luann McLawhorn</div>
                                    <span>+(81) 84 538 91231</span>
                                    <span>info@website.com</span>
                                </div>
                            </div>
                            <form class="quick-search form-icon-right" action="#" method="post">
                                <div class="form-row">
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <textarea class="form-control" name="message" placeholder="Message" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary w-100">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Property Search -->
                        <div class="widget advance_search_widget">
                            <h5 class="mb-30">Search Property</h5>
                            <form class="rounded quick-search form-icon-right" action="#" method="post">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
                                    </div>
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <select class="form-control">
                                            <option>Property Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="location" placeholder="Location">
                                            <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                            <div id="data-range-price" class="price_range price-range-toggle w-100">
                                                <div class="area-filter price-filter">
                                                    <span class="price-slider">
                                                        <input class="filter_price" type="text" name="price" value="0;10000000" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
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
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <select class="form-control">
                                            <option>Garage</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="keyword" placeholder="Min Area">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="keyword" placeholder="Max Area">
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <button class="form-control text-start toggle-btn" data-target="#aditional-features">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <div id="aditional-features" class="aditional-features visible-static p-5">
                                            <h5 class="mb-3">Aditional Options</h5>
                                            <ul class="row row-cols-1 custom-check-box mb-4">
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
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--============== Recent Property Widget Start ==============-->
                        <div class="widget widget_recent_property">
                            <h5 class="text-secondary mb-4">Recent Property</h5>
                            <ul>
                                <li>
                                    <img src="assets/images/thumbnaillist/01.jpg" alt="">
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary mb-0"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                        <span class="text-primary d-table py-1">$1280<small>/mo</small></span>
                                        <div class="quantity">
                                            <ul class="d-flex">
                                                <li><span>Rooms: </span>7</li>
                                                <li><span>Beds: </span>5</li>
                                                <li><span>Area: </span>3150sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/images/thumbnaillist/02.jpg" alt="">
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary mb-0"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                        <span class="text-primary d-table py-1">$1280<small>/mo</small></span>
                                        <div class="quantity">
                                            <ul class="d-flex">
                                                <li><span>Rooms: </span>7</li>
                                                <li><span>Beds: </span>5</li>
                                                <li><span>Area: </span>3150sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/images/thumbnaillist/03.jpg" alt="">
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary mb-0"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                        <span class="text-primary d-table py-1">$1280<small>/mo</small></span>
                                        <div class="quantity">
                                            <ul class="d-flex">
                                                <li><span>Rooms: </span>7</li>
                                                <li><span>Beds: </span>5</li>
                                                <li><span>Area: </span>3150sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/images/thumbnaillist/04.jpg" alt="">
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary mb-0"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                        <span class="text-primary d-table py-1">$1280<small>/mo</small></span>
                                        <div class="quantity">
                                            <ul class="d-flex">
                                                <li><span>Rooms: </span>7</li>
                                                <li><span>Beds: </span>5</li>
                                                <li><span>Area: </span>3150sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--============== Recent Property Widget End ==============-->
                    </div>--}}
                    <div class="col-xl-12 order-xl-1">
                        @if(isset($property->property_details))
                        <div class="property-overview border summary rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2 class="mb-3">Description</h2>
                                    <p style="font-size: 20px; text-align: justify;">
                                    @php echo nl2br($property->property_details) @endphp
                                    </p>
                                    {{--<div class="short-description d-flex">
                                        <span class="me-4 font-500">Highlights:</span>
                                        <div class="short-description">
                                            <ul class="list-style-tick">
                                                <li>Regular Fit.</li>
                                                <li>Full sleeves.</li>
                                                <li>Machine wash, tumble dry.</li>
                                            </ul>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($property->property_details) || isset($property->further_details))
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2 class="mb-3">More Information</h2>
                                    <ul class="list-three-fold-width">
                                        @if(isset($property->catagery))
                                                <li><span class="font-500">Listing Type :</span>
                                                @if(($property -> catagery) == 'for sale')
                                                    {{ 'For Sale' }}
                                                @endif
                                                @if(($property -> catagery) == 'for let')
                                                    {{ 'For Let' }}
                                                @endif
                                                @if(($property -> catagery) == 'shared accommodation')
                                                    {{ 'Shared Accommodation' }}
                                                @endif
                                                </li>
                                        @endif
                                        @if(isset($property->propertytype))
                                                <li><span class="font-500">Type :</span> {{ optional($property->propertytype)->type_name }}</li>
                                        @endif
                                        @if(isset($property->age))
                                                <li><span class="font-500">Age :</span> {{ $property->age }}</li>
                                        @endif
                                        @if(isset($property->rent_frequency))
                                                <li><span class="font-500">Let Type :</span> {{ $property->rent_frequency }}</li>
                                        @endif
                                        @if(isset($property->heating_type))
                                                <li><span class="font-500">Heating System :</span> {{ $property->heating_type }}</li>
                                        @endif
                                        @if(isset($property-> no_of_bedrooms))
                                            <li><span class="font-500">Bedrooms :</span> {{ $property-> no_of_bedrooms }}</li>
                                        @endif
                                        @if(isset($property-> no_of_bathrooms))
                                            <li><span class="font-500">Bathrooms :</span> {{ $property-> no_of_bathrooms }}</li>
                                        @endif
                                        @if(isset($property-> no_of_halls))
                                            <li><span class="font-500">Halls :</span> {{ $property-> no_of_halls }}</li>
                                        @endif
                                        @if(isset($property-> no_of_reseptions))
                                            <li><span class="font-500">Reseptions :</span> {{ $property->no_of_reseptions }}</li>
                                        @endif
                                        @if(isset($property->floors))
                                                <li><span class="font-500">Total Floor :</span> {{ $property->floors }}</li>
                                        @endif
                                        @if(isset($property->parking))
                                                <li><span class="font-500">Parking :</span> {{ implode(' & ', $property->parking) }}</li>
                                        @endif
                                        @if(isset($property->garden))
                                                <li><span class="font-500">Garden :</span> {{ implode(' & ', $property->garden) }}</li>
                                        @endif
                                        @if(isset($property->is_cctv))
                                            @if(($property->is_cctv) == 1)
                                                <li><span class="font-500">CCTV :</span> Yes</li>
                                            @endif
                                        @endif
                                        @if(isset($property->is_burglar_alarm))
                                            @if(($property->is_burglar_alarm) == 1)
                                            <li><span class="font-500">Burglar Alarm :</span> Yes</li>
                                            @endif
                                        @endif
                                        @if(isset($property->further_details))
                                            @foreach($property->further_details as $key)
                                                @if($key != null)
                                                    <li>{{ $key}}</li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($rooms))
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2 class="mb-3">Rooms</h2>
                                    <div class="tab-simple tab-action">
                                        <ul class="nav-tab-line list-color-secondary d-table mb-3">
                                            @php $i = 1; @endphp
                                            @foreach($rooms as $room)
                                                <li data-target="#tb-panel-{{ $i }}">{{ $room->room_name }}</li>
                                            @php $i++; @endphp
                                            @endforeach
                                        </ul>
                                        <div class="tab-element">
                                            <!-- Hosiptan data -->
                                            @php $i = 1; @endphp
                                            @foreach($rooms as $room)
                                            <div class="tab-pane tab-hide" id="tb-panel-{{ $i }}" style="display: block;">
                                                <div class="row row-cols-1">
                                                    <div class="row g-0">
                                                        <ul class="list-three-fold-width">
                                                            <li><span class="font-500">Length : </span> {{ $room->room_length }} {{ $room->room_dimention_unit }}</li>
                                                            <li><span class="font-500">Width : </span> {{ $room->room_width }} {{ $room->room_dimention_unit }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full-row pt-1 bg-white">
                                                        <div class="row g-0">
                                                            @foreach($room->roomimages as $image)
                                                                <div class="col-1">
                                                                    <div class="hover-img-zoom overflow-hidden transation">
                                                                        <a href="{{asset($image->image)}}" data-fancybox="gallery" data-caption="Caption for single image">
                                                                            <img class="transation" src="{{asset($image->image)}}" alt="Image not found!">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-4">Write A Review</h5>
                                    <div class="d-flex w-100 mb-5">
                                        <span>Your Rating:</span>
                                        <ul class="d-flex mx-2 text-primary font-12">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <form class="contact_message form-boder" action="#" method="post" novalidate="novalidate">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="email" name="email" placeholder="Email Address" type="text">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
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
        <!--============== Property Details End ==============-->
    @endif
@endsection