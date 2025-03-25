﻿<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>SleekMovers - Stress-Free Moving Services You Can Trust</title>
        <meta charset="utf-8">
        @include("includes.header")
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{asset('https://placehold.co/1920x410')}})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-5 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Our services</h1>
                        <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Reliable delivery services</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center mb-70px md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                   
                    @foreach ($serstp as $item)
                    <div class="col mb-30px">
                        <!-- start services box style --> 
                        <div class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                            <div class="position-relative">
                                <a href="{{ route('services',['slug' => $item->slug]) }}"><img src="{{ asset($item->images) }}" alt=""></a>
                            </div>
                            <div>
                                <div class="p-30px w-80 xl-w-100 mx-auto text-center">
                                    <a href="demo-logistics-services-details.html" class="d-inline-block fs-20 fw-600 text-dark-gray mb-5px">{{ucwords($item->title)}}</a>
                                    <p>{!! Str::words($item->details,'4','...') !!}</p> 
                                </div> 
                                <div class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                    <a href="{{ route('services',['slug' => $item->slug]) }}" class="btn btn-link btn-hover-animation-switch fw-700 btn-small text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end services box style -->
                    </div>    
                    @endforeach

                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <i class="bi bi-patch-check-fill text-base-color icon-very-medium me-10px"></i>
                        <span class="fs-22 fw-500 text-dark-gray">We are committed to providing <span class="text-decoration-line-bottom text-dark-gray fw-700">cost-effective solutions</span> to all of our clients.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section --> 
        <section class="md-pb-15 xs-pb-24">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xl-7 col-lg-8 md-mb-35px">
                        <h6 class="text-dark-gray fw-600" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>Our small size enables us to service our clients closely and gives us the flexibility to adapt to changing scenarios in the design world.</h6>
                        <div class="row row-cols-1 row-cols-sm-3">
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Warehousing</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Transportation</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Reverse logistics</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Customs clearance</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Freight forwarding</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Freight forwarding</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Cargo tracking</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Express delivery</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Packaging & crating</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Cold chain logistics</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Supply chain</li>
                                    <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Value-added services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-xl-1 position-relative">
                        <div class="w-80 lg-w-85 mt-minus-20px float-end" data-animation-delay="200" data-shadow-animation="true">
                            <img class="md-w-100" src="{{asset('images/15.jpg')}}" alt="" />
                        </div>
                        <div class="w-50 position-absolute left-15px bottom-10px lg-bottom-minus-50px" data-shadow-animation="true" data-animation-delay="300" data-parallax-layout-ratio="1.2">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="box-shadow-quadruple-large w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        @include("includes.footer")