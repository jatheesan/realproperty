@extends('layouts.boxroomlayout')
@section('content')

    @if(isset($property))
    <!--============== Property Slider Start ==============-->
    <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="single-property" style="width:1200px; height:600px; margin:0 auto 30px;">
                        @if(isset($property->images))
                        @foreach($property->images as $image)
                        <div class="ls-slide"
                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img
                                width="1920" height="1280" src="{{asset($image->image)}}"
                                class="ls-bg" alt="" /> </div>
                        @endforeach
                        @else
                            <!-- Slide 1-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/5.png') }}" class="ls-bg" alt="" /> </div>

                            <!-- Slide 2-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:out; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/6.png') }}" class="ls-bg" alt="" /> </div>

                            <!-- Slide 3-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ asset('boxroomstyle/images/slider/8.png') }}" class="ls-bg" alt="" /> </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Slider End ==============-->

        <!--============== Pricing Start ==============-->
    <div class="container">
        <div class="container full-row py-10 position-relative w-100 overlay-dark sm-mt-20 bg-sm-secondary"
            style="margin-top:-144px; z-index:99">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto">
                        <span class="d-inline-block text-primary">{{ optional($property->propertytype)->type_name }}</span>
                        <h4 class="font-400 text-white"><i class="fas fa-map-marker-alt text-white"></i>{{ ' ' }}{{ $property-> street_name }}{{ ' ' }}{{ $property-> post_town }}{{ ', ' }}{{ $property-> post_city }}{{ ', ' }}{{ $property-> first_postcode }}</h4>
                        {{--<h4 class="font-400 text-white"><i class="fas fa-map-marker-alt text-white"></i>{{ ' ' }}{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property-> display_address_line2 }}</h4>--}}
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
                                <li><i class="fas fa-car text-primary"></i></li>
                                <li><i class="fas fa-tree text-primary"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-sm-auto text-sm-end">
                    @if(isset($property->price))
                        <span class="text-primary font-large font-500 d-table ms-sm-auto">£{{ $property->price }} @if(isset($property->rent_frequency)) <span style="color:#ff7f50 !important;">{{' | '}}</span>{{ $property->rent_frequency }} @endif</span>
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
    </div>
    <!--============== Pricing End ==============-->

    <!--============== Property Details Start ==============-->
    <div class="full-row pt-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <!--============== Recent Property Widget Start ==============-->
                    <div class="widget widget_recent_property">
                        <h5 class="text-primary mb-4">Recent Property</h5>
                        <ul>
                            @if(isset($properties))
                                @foreach($properties as $prop)
                                <li>
                                    @foreach($prop->images as $image)
                                        @if(($image->is_main) == 1)
                                        <a href="{{ route('property.details', $prop->id ) }}"><img src="{{asset($image->image)}}" alt="iHOMES"></a>
                                        @endif
                                    @endforeach
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary mb-0">
                                            <a href="{{ route('property.details', $prop->id ) }}">{{ optional($prop->propertytype)->type_name }}</a>{{ ' | ' }}
                                            @if(($property -> catagery) == 'for sale')
                                                <span>For Sale</span>
                                            @endif
                                            @if(($property -> catagery) == 'for let')
                                                <span>For Let</span>
                                            @endif
                                            @if(($property -> catagery) == 'for shared')
                                                <span>Shared</span>
                                            @endif
                                        </h6>
                                    @if(isset($prop->price))
                                        <span class="text-primary d-table py-1">£{{ $prop->price }} @if(isset($prop->rent_frequency)) <span style="color:#000 !important;">{{' | '}}</span>{{ $prop->rent_frequency }} @endif</span>
                                    @endif
                                        <div class="quantity">
                                            <ul class="d-flex">
                                            @if(isset($prop-> bedrooms))
                                            <li class="pe-3"><i class="fas fa-bed text-primary"></i> {{ $prop-> bedrooms }}</li>
                                            @endif
                                            @if(isset($prop-> bathrooms))
                                            <li class="pe-3"><i class="fas fa-bath text-primary"></i> {{ $prop-> bathrooms }}</li>
                                            @endif
                                            @if(isset($prop-> halls))
                                            <li class="pe-3"><i class="fas fa-couch text-primary"></i></i> {{ $prop-> halls }}</li>
                                            @endif
                                            <li class="pe-3"><i class="fas fa-car text-primary"></i></li>
                                            <li class="pe-3"><i class="fas fa-tree text-primary"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <hr/>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <!--============== Recent Property Widget End ==============-->
                </div>
                <div class="col-xl-8 order-xl-1">
                    @if(isset($property->property_details))
                    <div class="property-overview border summary rounded bg-white p-30 mb-30">
                        {{--<div class="row mb-4">
                                <div class="col-12">
                                    <div class="product-offers mt-2">
                                        <ul class="product-offers-list">
                                            <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                            <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                            <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                        </ul>
                                    </div>
                                    <div class="mt-4">
                                        <ul class="quick-meta">
                                            <li class="bg-secondary"><a href="#" title="Add to compare" class="text-white"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li class="bg-secondary"><a href="#" title="Add wishlist" class="text-white"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="bg-secondary"><a href="#" title="Media share" class="text-white"><i class="flaticon-share flat-mini"></i></a></li>
                                            <li class="bg-secondary"><a href="#" title="Print Data" class="text-white"><i class="flaticon-printer flat-mini"></i></a></li>
                                            <li class="bg-secondary"><a href="#" title="Download PDF" class="text-white"><i class="fas fa-download flat-mini"></i></a></li>
                                            <li class="bg-secondary w-auto"><a href="#" class="px-5 text-white">Booking Now</a></li>
                                        </ul>
                                    </div>

                                    <hr>
                                    <div class="mt-2">
                                        <ul class="list-three-fold-width d-table">
                                            <li><span class="font-500">Rooms:</span> 7</li>
                                            <li><span class="font-500">Beds:</span> 5</li>
                                            <li><span class="font-500">Area:</span> 1200 Sqft<sup>2</sup></li>
                                            <li><span class="font-500">Baths:</span> 1</li>
                                            <li><span class="font-500">Car Garage:</span> Yes ( 5 Capacity )</li>
                                            <li><span class="font-500">Swimming:</span> Yes ( 1 Large )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>--}}
                        <div class="row row-cols-1">
                            <div class="col">
                                <h3 class="mb-3 text-primary">Description</h3>
                                <p style="font-size: 20px; text-align: justify;">
                                    @php echo nl2br($property->property_details) @endphp
                                </p>
                                <div class="short-description d-flex mt-5">
                                    <span class="me-4 font-500 text-primary">Highlights:</span>
                                    <div class="short-description">
                                        <ul class="list-style-tick">
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
                        </div>
                    </div>
                    @endif
                    @if(isset($property->property_details) || isset($property->further_details))
                    <div class="property-overview border rounded bg-white p-30 mb-30">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h3 class="mb-3 text-primary">More Information</h3>
                                <ul class="list-three-fold-width list-style-tick">
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
                                    <li><span class="font-500">Type :</span>
                                        {{ optional($property->propertytype)->type_name }}</li>
                                    @endif
                                    @if(isset($property->age))
                                    <li><span class="font-500">Age :</span> {{ $property->age }}</li>
                                    @endif
                                    @if(isset($property->rent_frequency))
                                    <li><span class="font-500">Let Type :</span> {{ $property->rent_frequency }}</li>
                                    @endif
                                    @if(isset($property->heating_type))
                                    <li><span class="font-500">Heating System :</span> {{ $property->heating_type }}
                                    </li>
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
                                    <li><span class="font-500">Reseptions :</span> {{ $property->no_of_reseptions }}
                                    </li>
                                    @endif
                                    @if(isset($property->floors))
                                    <li><span class="font-500">Total Floor :</span> {{ $property->floors }}</li>
                                    @endif
                                    @if(isset($property->parking))
                                    <li><span class="font-500">Parking :</span> {{ implode(' & ', $property->parking) }}
                                    </li>
                                    @endif
                                    @if(isset($property->garden))
                                    <li><span class="font-500">Garden :</span> {{ implode(' & ', $property->garden) }}
                                    </li>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(isset($rooms))
                    <div class="property-overview border rounded bg-white p-30 mb-30">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h3 class="mb-3 text-primary">Rooms</h3>
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
                                                        <li><span class="font-500">Length : </span>
                                                            {{ $room->room_length }} {{ $room->room_dimention_unit }}
                                                        </li>
                                                        <li><span class="font-500">Width : </span>
                                                            {{ $room->room_width }} {{ $room->room_dimention_unit }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="full-row pt-1 bg-white">
                                                <div class="row g-0">
                                                    @foreach($room->roomimages as $image)
                                                    <div class="col-1">
                                                        <div class="hover-img-zoom overflow-hidden transation">
                                                            <a href="{{asset($image->image)}}" data-fancybox="gallery"
                                                                data-caption="Caption for single image">
                                                                <img class="transation" src="{{asset($image->image)}}"
                                                                    alt="Image not found!">
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
                                <h3 class="mb-3 text-primary">For All Request</h3>
                                <div class="tab-simple tab-action">
                                    <ul class="nav-tab-line list-color-secondary d-table mb-3">
                                        <li class="active" data-target="#tb-1">Enquiries</li>
                                        <li data-target="#tb-2">Property Viewing</li>
                                    </ul>
                                    <div class="tab-element">
                                        <!-- Hosiptan data -->
                                        <div class="tab-pane tab-hide" id="tb-1" style="display: block;">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="property-overview border rounded bg-white p-30 mb-30">
                                                        <h4 class="mb-4">Enquiries</h4>
                                                        @if(count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <button type="button" class="close"
                                                                data-dismiss="alert">x</button>
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                <li>{{ $error}}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif

                                                        @if($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <button type="button" class="close"
                                                                data-dismiss="alert">x</button>
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                        @endif
                                                        <form class="contact_message form-boder"
                                                            action="{{ url('/sendmail/mail') }}" method="post"
                                                            role="form" novalidate="novalidate">
                                                            @csrf
                                                            <div class="row g-3">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="hidden" class="form-control" id="id"
                                                                        name="id" value="{{ $property -> id }}">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="hidden" class="form-control"
                                                                        id="location" name="location"
                                                                        value="{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property-> display_address_line2 }}">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" class="form-control" id="name"
                                                                        name="name" placeholder="Name">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" class="form-control" id="tel-no"
                                                                        name="tel-no" placeholder="Contact No">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="email" class="form-control" id="email"
                                                                        name="email" placeholder="Email Address">
                                                                </div>
                                                                <input type="hidden" class="form-control"
                                                                        id="subject" name="subject"
                                                                        placeholder="Subject"
                                                                        value="Request for enquiring this property">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <textarea class="form-control" id="message" rows="5"
                                                                        name="message" placeholder="Message"></textarea>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-6">
                                                                    <button class="btn btn-primary" id="send"
                                                                        value="send" type="submit">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Shpping Data -->
                                        <div class="tab-pane tab-hide" id="tb-2" style="display: block;">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div
                                                        class="property-overview border border-info rounded bg-white p-30 mb-30">
                                                        <h4 class="mb-4">Property Viewing</h4>
                                                        @if(count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <button type="button" class="close"
                                                                data-dismiss="alert">x</button>
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                <li>{{ $error}}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif

                                                        @if($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <button type="button" class="close"
                                                                data-dismiss="alert">x</button>
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                        @endif
                                                        <form class="contact_message form-boder"
                                                            action="{{ url('/sendmail/mail') }}" method="post"
                                                            role="form" novalidate="novalidate">
                                                            @csrf
                                                            <div class="row g-3">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="hidden" class="form-control" id="id"
                                                                        name="id" value="{{ $property -> id }}">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="hidden" class="form-control"
                                                                        id="location" name="location"
                                                                        value="{{ $property-> display_address_line1 }}{{ ' ' }}{{ $property-> display_address_line2 }}">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input class="form-control" id="name" name="name"
                                                                        placeholder="Name" type="text">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" class="form-control" id="tel-no"
                                                                        name="tel-no" placeholder="Contact No">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="email" class="form-control" id="email"
                                                                        name="email" placeholder="Email Address">
                                                                </div>
                                                                <input type="hidden" class="form-control"
                                                                        id="subject" name="subject"
                                                                        placeholder="Subject"
                                                                        value="Request for viewing the this property">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <textarea class="form-control" id="message" rows="5"
                                                                        name="message" placeholder="Message"></textarea>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-6">
                                                                    <button class="btn btn-primary" id="send"
                                                                        value="send" type="submit">Submit</button>
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
    <!--============== Property Details End ==============-->
    @endif
@endsection