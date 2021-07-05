@extends('layouts.boxroomlayout')
@section('content')

    <!--============== Page Banner Start ==============-->
    <div class="page-banner-simple bg-secondary py-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="banner-title text-white">How to Contact Us?</h3>
                        <span class="fas fa-map-marker-alt banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">    Ihomes Lettings & Management. Suite 1, 976 Eastern Ave, Newbury Park, IG2 7JD.</span><br/>
                        <span class="fas fa-phone banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">   (0208) 599 2555</span><br/>
                        <span class="fas fa-envelope-open banner-tagline font-large text-primary">{{ " " }}</span><span class="banner-tagline font-medium text-white">   info@i-homes.net</span><br/>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page Banner End ==============-->

        <!--==============Map and form Start==============-->
        <div class="full-row bg-light pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-secondary">
                            <span class="tagline-2 text-primary">iHOMES</span>
                            <h2 class="text-secondary mb-4">For all enquiries, pleace email us using the form.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col px-0 bg-white">
                        {{--<img src="{{ asset('boxroomstyle/images/background/meet.jpg') }}" alt="image not found">--}}
                        <div id="map-banner" style="padding:50px 80px">
                            <div class="homepage-map">
                                <div id="map">
                                    <iframe width="100%" height="100%" src="//maps.google.com/maps?q=Ihomes%2C%20976%20Eastern%20Avenue%2C%20IG2%207JD&amp;output=embed" title=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-white" style="margin: 0; padding: 0;">
                        <div class="w-75 w-lg-100 sm-px-0" style="padding:50px 80px">
                            <h2 class="text-secondary ms-5 mb-5">Write A Message</h2>
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
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
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
                            {{--<div class="bb-accordion ac-single-show accordion-plus-left">
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate active" href="#">Address</a>
                                    <div class="ac-collapse show" style="display: block;">
                                        <p>Ihomes Lettings & Management. Suite 1, 976 Eastern Ave, Newbury Park, IG2 7JD.</p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">Contact Number</a>
                                    <div class="ac-collapse">
                                        <p>(0208) 599 2555</p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">Email</a>
                                    <div class="ac-collapse">
                                        <p>info@i-homes.net</p>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Map and form End ==============-->

        <!--============== Register Section Start ==============-->
        <div class="full-row bg-primary py-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h3 class="text-white xs-text-center font-400">OPENING TIMES</h3>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="text-white xs-text-center font-400">Week Days</h5>
                        <p class="text-white xs-text-center font-400">9:30am - 5:30pm</p>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="text-white xs-text-center font-400">Week Ends</h5>
                        <p class="text-white xs-text-center font-400"><span style="font-size:18px;">Saturday</span> -> 9:30am - 3:30pm</p>
                        <p class="text-white xs-text-center font-400"><span style="font-size:18px;">Sunday</span> -> Close</p> 
                    </div>
                    <div class="col-sm-4 text-center">
                        <h3 class="text-white xs-text-center font-400">APPOINTMENTS</h3>
                    </div>
                    <div class="col-sm-8">
                        <h5 class="text-black xs-text-center font-400">Weekends and after office hours are possible and by appointment only.</h5>
                    </div>
                    {{--<div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btn-white y-center position-relative d-table xs-mx-auto ms-auto">Subscribe Now</a>
                    </div>--}}
                </div>
            </div>
        </div>
        <!--============== Register Section End ==============-->

@endsection