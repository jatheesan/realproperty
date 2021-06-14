@extends('layouts.applayout')

@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
{{--<section class="intro-single section-t1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Jaffna </h1>
                        <span class="color-text-a">Kokuvil North, IL 606543</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('/properties') }}">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                overview
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->--}}

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property popup-gallery">
                            @foreach($property->images as $image)
                                <div class="carousel-item-b">
                                    <a data-toggle="modal" data-target="#GListModalGallery"><img src="{{asset($image->image)}}" class="property-image" alt="" /></a>
                                </div>
                            @endforeach
                        </div>
                </div>
                <div class="col-sm-12">
                    <!-- modalGallery -->
                    <div class="modal" id="GListModalGallery" tabindex="-1" role="dialog" aria-labelledby="GListModalGalleryLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="owl-modal">
                                        <div class="item"><img src="{{ asset('images/single-property/single-prop-1.jpeg') }}" alt="" /></div>
                                        <div class="item"><img src="{{ asset('images/single-property/single-prop-3.jpeg') }}" alt="" /></div>
                                        <div class="item"><img src="{{ asset('images/single-property/single-prop-5.jpeg') }}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /modalGallery -->
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                @if(isset($property->price))
                                    <div class="card-box-ico">
                                            <span class="ion-money">€</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">{{ $property->price }}</h5>
                                    </div>
                                @else
                                    <div class="card-box-ico1">
                                        <span class="ion-money">Call for Price</span>
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section-t4">
                                            <h3 class="title-e">Quick Summary</h3><hr/>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        @if(isset($property->display_address))
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            {<span> @php echo nl2br($property->display_address) @endphp</span>
                                        </li>
                                        @endif
                                        @if(isset($property->type))
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type :</strong>
                                            <span>{{ optional($property->propertytype)->type_name }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->catagery))
                                            <li class="d-flex justify-content-between">
                                                <strong>Status :</strong>
                                                @if(($property->catagery) == 'for sale')
                                                    <span>sale</span>
                                                @else
                                                    <span>Rent | {{ $property->rent_frequency }}</span>
                                                @endif
                                            </li>
                                        @endif
                                        @if(isset($property->land_area))
                                        <li class="d-flex justify-content-between">
                                            <strong>Land Area :</strong>
                                            <span>{{ $property->land_area }}{{ ' ' }}{{ $property->area_unit }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->internal_area))
                                        <li class="d-flex justify-content-between">
                                            <strong>Internal Area :</strong>
                                            <span>{{ $property->internal_area }}{{ ' ' }}{{ $property->area_unit }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->no_of_bedrooms))
                                        <li class="d-flex justify-content-between">
                                            <strong>Bedrooms :</strong>
                                            <span>{{ $property->no_of_bedrooms }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->no_of_bathrooms))
                                        <li class="d-flex justify-content-between">
                                            <strong>Bathrooms :</strong>
                                            <span>{{ $property->no_of_bathrooms }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->no_of_halls))
                                        <li class="d-flex justify-content-between">
                                            <strong>Halls :</strong>
                                            <span>{{ $property->no_of_halls }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->no_of_reseptions))
                                        <li class="d-flex justify-content-between">
                                            <strong>Reseptions:</strong>
                                            <span>{{ $property->no_of_reseptions }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->parking))
                                        <li class="d-flex justify-content-between">
                                            <strong>Parking :</strong>
                                            <span>{{ implode(' & ', $property->parking) }}</span>
                                        </li>
                                        @endif
                                        @if(isset($property->garden))
                                        <li class="d-flex justify-content-between">
                                            <strong>Garden :</strong>
                                            <span>{{ implode(' & ', $property->garden) }}</span>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            @if(isset($property->property_details))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <h3 class="title-e">About this property</h3><hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a" style="text-align: justify;">
                                    @php echo nl2br($property->property_details) @endphp
                                </p>
                            </div>
                            @endif
                            @if(isset($property->property_details) || isset($property->further_details))
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div>
                                        <h3 class="title-e">Further Details</h3><hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    @if(isset($property->further_details))
                                        @foreach($property->further_details as $key)
                                            @if($key != null)
                                                <li>{{ $key}}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                    @if(isset($property->is_burglar_alarm))
                                        @if(($property->is_burglar_alarm) == 1)
                                            <li>{{ 'Having barglar alarm feature' }}</li>
                                        @endif
                                    @endif

                                    @if(isset($property->is_cctv))
                                        @if(($property->is_cctv) == 1)
                                            <li>{{ 'Having CCTV feature' }}</li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                                role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                                aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                                aria-controls="pills-map" aria-selected="false">Ubication</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                            aria-labelledby="pills-video-tab">
                            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="assets/img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>--}}
                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div>
                                <h3 class="title-e">Contact Agent</h3><hr/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{--<div class="col-md-6 col-lg-4">
                            <img src="{{ asset('images/agent/agent-4.jpg') }}" alt="" class="img-fluid">
                        </div>--}}
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <br>
                                <h4 class="title-agent">Anabella Geller</h4>
                                <p class="color-text-a">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula
                                    elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class="list-unstyled">
                                    {{--<li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">+94214568932</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">+94771378737</span>
                                    </li>--}}
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">annabella@example.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">Annabela.ge</span>
                                    </li>
                                </ul>
                                <div class="socials-a">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="property-contact">
                                <form class="form-a">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6 mb-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-a"
                                                    id="inputName" placeholder="Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 mb-1">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-a"
                                                    id="inputEmail1" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <textarea id="textMessage" class="form-control" placeholder="Comment *"
                                                    name="message" cols="45" rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Property Single-->

</main><!-- End #main -->

@endsection
