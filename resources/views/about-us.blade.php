<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>About SleekMovers - Who We Are</title>
        <meta charset="utf-8">
        @include("includes.header")
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{ asset('images/banner.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-5 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Who We Are</h1>
                        <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">About Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
       <!-- start section --> 
       <section class="position-relative">
            <div class="container">
                <img src="images/demo-logistics-home-bg-01.jpg" class="position-absolute bottom-10px right-0px z-index-minus-1" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 md-mb-50px" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <img src="images/4.jpg" class="w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">Your favourite Movers. </h2>
                        <p class="w-90 lg-w-100">
                            {{ $abt ? $abt->content : '' }}"
                        </p>
                       
                        
                        <div class="mt-35px d-flex flex-wrap">
                            <a href="{{ route('ouservice') }}" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-right me-30px">
                                <span> 
                                    <span class="btn-text">Our services</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <div class="feature-box feature-box-left-icon-middle xs-mt-20px">
                                <div class="feature-box-icon feature-box-icon-rounded bg-base-color w-60px h-60px rounded-circle me-15px">
                                    <i class="feather icon-feather-phone-call align-middle icon-extra-medium text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-block fw-500">Get in touch</span>
                                    <a href="tel:{{ $cont ? $cont->phone : '' }}" class="d-block text-dark-gray fw-700">{{ $cont ? $cont->phone : '' }}</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->
          
        <!-- start section -->
        <section class="position-relative half-section pt-3">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Why Choose Us</div>
                        <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Fields of  <span class="text-highlight">expertise<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
                    </div>
                </div>
                <div class="row row-cols-auto row-cols-xl-4 row-cols-sm-2 position-relative" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col align-self-start xs-mb-40px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-110 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">01</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-60px sm-pt-40px">
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Reliable services</span>
                                <p>Lorem ipsum is simply text the printing typesetting standard dummy.</p>
                                <span class="w-60px h-2px bg-dark-gray d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-end mt-40px lg-mt-0">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-110 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">02</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-60px sm-pt-40px">
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Industry expertise</span>
                                <p>Lorem ipsum is simply text the printing typesetting standard dummy.</p>
                                <span class="w-60px h-2px bg-dark-gray d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-start lg-mt-40px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-110 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">03</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-60px sm-pt-40px">
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Experienced team</span>
                                <p>Lorem ipsum is simply text the printing typesetting standard dummy.</p>
                                <span class="w-60px h-2px bg-dark-gray d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-end mt-40px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-110 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">04</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-60px sm-pt-40px">
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Safe warehousing</span>
                                <p>Lorem ipsum is simply text the printing typesetting standard dummy.</p>
                                <span class="w-60px h-2px bg-dark-gray d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
           
        </section>
        <!-- end section -->
       
       
        <!-- start section -->
        <section class="pt-0 overflow-hidden">
            <div class="container-fluid">
                <div class="row justify-content-center mb-3 sm-mb-30px">
                    <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Testimonials</div>
                        <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px mb-0">Happy <span class="text-highlight">customers<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
                    </div>
                </div>
                <div class="row mb-3 md-mb-35px" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-12 review-style-10 position-relative">
                        <div class="outside-box-right-1 outside-box-left-1">
                            <div class="swiper" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 4 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper mt-10px mb-10px">
                                    @forelse ($testi as $item)
                                            <!-- start slider item --> 
                                        <div class="swiper-slide">    
                                            <!-- start review item -->
                                            <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                                <div class="p-15px">
                                                    <div class="vertical-title-center align-items-center">
                                                        <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">{{ucwords($item->clientname)}}</div>
                                                    </div>
                                                </div>
                                                <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                                    <div>
                                                        <p class="mb-15px w-95 xl-w-100">{!! $item->message !!}</p>
                                                        <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                            {{-- <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- end review item --> 
                                        </div>
                                    @empty
                                        
                                    @endforelse
                                  
                                    <!-- end slider item -->
                                    
                                    <!-- end slider item -->
                                   
                                </div>
                            </div>
                        </div>
                        <!-- start slider pagination -->
                        <!--<div class="swiper-pagination slider-three-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
          
        </section>
        <!-- end section -->
         
        @include("includes.footer")