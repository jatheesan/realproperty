@extends('layouts.boxroomlayout')
@section('content')

    <!--============== Page Banner Start ==============-->
    <div class="page-banner-simple bg-secondary py-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="banner-title text-white">How to Contact Us?</h3>
                        <span class="fas fa-map-marker-alt banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">    BoxRoom for Rent Real Estate Agency, 301 The Greenhouse, Custard Factory, London, E3 8DY.</span><br/>
                        <span class="fas fa-phone banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">   +1 246-345-0695</span><br/>
                        <span class="fas fa-envelope-open banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">   boxroom4rent@gmail.com</span><br/>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page Banner End ==============-->

        <!--============== Accordian Start ==============-->
        <div class="full-row bg-light pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-secondary mb-lg-5">
                            <span class="tagline-2 text-primary">BoxRoom4Rent</span>
                            <h2 class="text-secondary mb-4">For all enquiries, pleace email us using the form.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col px-0"><img src="{{ asset('boxroomstyle/images/background/meet.jpg') }}" alt="image not found"></div>
                    <div class="col bg-white" style="margin-top: -150px;">
                        <div class="w-75 w-lg-100 sm-px-0" style="padding:50px 80px">
                            <h2 class="text-secondary mb-5">Write A Message</h2>
                            <div class="property-overview border rounded bg-white p-30 mb-30">
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
                                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
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
                            {{--<div class="bb-accordion ac-single-show accordion-plus-left">
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate active" href="#">Address</a>
                                    <div class="ac-collapse show" style="display: block;">
                                        <p>BoxRoom for Rent Real Estate Agency, 301 The Greenhouse, Custard Factory, London, E3 8DY.</p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">Contact Number</a>
                                    <div class="ac-collapse">
                                        <p>+1 246-345-0695</p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">Email</a>
                                    <div class="ac-collapse">
                                        <p>boxroom4rent@gmail.com</p>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Accordian End ==============-->

@endsection