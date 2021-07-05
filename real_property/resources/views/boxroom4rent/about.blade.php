@extends('layouts.boxroomlayout')
@section('content')
    
        <!--============== Page Banner Start ==============-->
        <div class="page-banner-simple bg-secondary py-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="banner-title text-white">We are Professionals in Realestate</h3>
                        <span class="banner-tagline font-medium text-white">We make Accessibility, Transparency & Affordability in Commercial Real Estate Investment.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page Banner End ==============-->

        <!--============== Features Start ==============-->
        <div class="full-row pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-secondary mb-5">
                            <span class="tagline-2 text-primary">Capablities</span>
                            <h2 class="text-secondary mb-4">Awesome Real Estate Company for Housing and Construction.</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">01</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Property Booking</a></h5>
                                    <p>First find your dream property and booked immediately</p>
                                </div>
                            </div>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">02</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Property Deal</a></h5>
                                    <p>Property Deal firms help to buyers.</p>
                                </div>
                            </div>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">03</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Property Management</a></h5>
                                    <p>Property management firms help real estate owners rent out the units in their buildings. 
                                    Their jobs include collecting rent, showing units, fixing deficiencies, performing repairs, 
                                    and managing tenants. They charge a fee, typically a percentage of the rent, to property owners.</p>
                                </div>
                            </div>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">04</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">100% satisfied</a></h5>
                                    <p>If someone buyers are 100% satisfied with the property. after, they’ll pay the full price.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Features End ==============-->

        <!--============== Banner Start ==============-->
        <div class="full-row paraxify" style="background-image:url('{{ asset('boxroomstyle/images/background/bg-4.png')}}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-white">
                            <h3><span class="tagline text-primary">Who We Are</span></h3>
                            {{--<h3 class="mb-4 text-white">Since <Span class="text-primary">BoxRoom4Rent</Span> was launched in 2021, our goal has been to the online property portal of choice for all Britons.</h3>--}}
                            <p><Span class="text-primary">iHOMES</Span> is a team of real Estate Agents specialising in Redbridge and surrounding boroughs with experience over 15 years in residential lettings & sales, property management, mortgages, commercial leases and licensing.</p> 
                            <p>Our aim is to be the online property portal of choice for all Britons where all sellers and landlords will find buyers or tenants for their properties, 
                               and for buyers/tenants to find their ideal property easily and quickly.</p>
                            <p>Overall we are a one stop store for all your property needs and guide you throughout the process. We look forward to serve you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner End ==============-->

        <!--============== Testimonials Start ==============-->
        <div class="full-row bg-white" style="background-image:url('{{ asset('boxroomstyle/images/background/oh_bg-min.png')}}'); background-size: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto position-relative">
                        <span class="tagline text-primary">Testimonial</span>
                        <h2 class="mb-5"><span class="font-weight-bold">What People</span> Says About Us</h2>
                        <div class="owl-carousel single-carusel testimonial-slider dot-disable position-static">
                            <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p>Great environment, professional and nice people.
                                    They care about their clients and train their agents frequently so they are always
                                    updated with what’s going on in the market. I recommend REAL PROPERTY to anyone
                                    looking to do any Real Estate transaction.</p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">Jatheesan.</span>
                            </div>
                            <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p>The best real estate company I have ever dealt with.
                                    Very professional, experienced and helpful agents and brokers. Highly recommend.</p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">Prashanth.</span>
                            </div>
                            <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p>Great environment, professional and nice people.
                                    They care about their clients and train their agents frequently so they are always
                                    updated with what’s going on in the market. I recommend REAL PROPERTY to anyone
                                    looking to do any Real Estate transaction.</p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">Senthuran.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Testimonials End ==============-->
@endsection