@extends('layouts.applayout')

@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
            <h1 class="title-single">We are Professionals in Realestate</h1>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    About
                    </li>
                </ol>
            </nav>
        </div>
        </div>
    </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="{{ asset('images/properties/prop-8.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">RealProperty
                <span></span>
                <br> Sinse 2021
              </h3>
              <p>- Mediator -</p>
            </div>
          </div>
          <div class="col-md-12 section-t8">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{ asset('images/properties/prop-9.jpg') }}" alt="" class="img-fluid" style="height:500px !important;">
              </div>
              <div class="col-lg-2  d-none d-lg-block">
                <div class="title-vertical d-flex justify-content-start">
                  <span>RealProperty Exclusive Property</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Who We Are?
                  </h3>
                </div>
                <p class="color-text-a" style="text-align:justify">
                Since Investopedia was launched in 2021, RealProperty is Sri Lanka's mostly visited property website
                and has the largest number of Sri Lankan property ads listed than any other site on the Internet.
                RealProperty was started with the intention of providing a free online platform for property owners, 
                landlords and agents in Sri Lanka to advertise their property for free of charge. Our aim is to be the online 
                property portal of choice for all Sri Lankans where all sellers and landlords will find buyers or tenants for their properties, 
                and for buyers/tenants to find their ideal property easily and quickly.
                </p>

                <div class="sub-title-box-d">
                    <h3 class="sub-title-d">Why Choose Us?</h3>
                </div>
                <div class="list-style">
                    <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                        <li>Years of Experience</li>
                        <li>Cost Control Experts</li>
                        <li>100% Satisfaction Guarantee</li>
                    </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                        <li>Free Consultation</li>
                        <li>Satisfied Customers</li>
                        <li>Affordable Pricing</li>
                    </ul>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</main>
@endsection