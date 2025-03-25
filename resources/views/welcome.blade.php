<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>SleekMovers - Stress-Free Moving Services You Can Trust</title>
        <meta charset="utf-8">
        @include("includes.header")
        
        <!-- start slider --> 
        <section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
            <div class="swiper h-100 swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper">
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url({{ asset('images/1.jpg') }});"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                                <div class="col-xxl-7 col-xl-10 text-white">
                                    <h1 class="fw-600">Stress-Free Moving Services You Can Trust</h1>  
                                    <div class="lg-mb-8 md-mb-0">
                                        <a href="{{ route('ouservice') }}" class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Our Services</a>
                                       
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url({{ asset('images/2.jpg') }});"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                                <div class="col-xxl-7 col-xl-10 text-white">
                                    <h1 class="fw-600">Your Reliable Partner for Residential & Commercial Moves</h1>  
                                      <div class="lg-mb-8 md-mb-0">
                                    <a href="{{ route('ouservice') }}" class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Our Services</a>
                                       
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url({{ asset('images/3.jpg') }});"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                                <div class="col-xxl-7 col-xl-10 text-white">
                                    <h1 class="fw-600">Expert Packing, and Spotless Move-Out Cleaning</h1>  
                                   <div class="lg-mb-8 md-mb-0">
                                    <a href="{{ route('ouservice') }}" class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Our Services</a>
                                       
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- end slider item -->
                </div>
                <!-- start slider pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none"></div>
                <!-- end slider pagination -->
                <!-- start slider navigation -->
                <div class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100"><i class="bi bi-arrow-left-short"></i></div>
                <div class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100"><i class="bi bi-arrow-right-short"></i></div>
                <!-- end slider navigation --> 
            </div>
        </section>
        <!-- end slider --> 
        <!-- start section -->
        <section class="p-0 lg-pt-8 xs-pt-50px">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 outside-box-top-205px lg-mt-0 position-relative z-index-1">
                        <div class="border-radius-10px overflow-hidden">
                            <div class="bg-base-color p-50px xs-p-30px position-relative">
                                <span class="text-dark-gray opacity-8 fw-500 d-block mb-5px">Licensed & Insured Movers</span>
                                <h5 class="mb-0 fw-700 text-dark-gray">100% Customer Satisfaction Guarantee</h5>
                                
                            </div>
                            <div class="bg-dark-gray ps-50px pe-50px pt-20px pb-20px sm-ps-30px sm-pe-30px">
                                <a href="{{ route('contact') }}" class="fs-19 fw-500 text-white d-flex w-100 align-items-center">Get a Free Quote Today<i class="feather icon-feather-plus ms-auto icon-extra-medium"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section --> 
        <section class="position-relative">
            <div class="container">
                <img src="{{ asset('images/demo-logistics-home-bg-01.jpg') }}" class="position-absolute bottom-10px right-0px z-index-minus-1" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 md-mb-50px" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <img src="{{ asset('images/4.jpg') }}" class="w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">Your favourite Movers. Moving with Safety and Assurance</h2>
                        <p class="w-90 lg-w-100">We are a dedicated moving company committed to making your transition seamless and stress-free. With years of experience, a skilled team, and a passion for customer satisfaction, we handle every move with the utmost care and professionalism. Whether it’s a local move or a 
                            cross-country relocation, you can rely on us to deliver exceptional service.</p>
                       
                        
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
                                    <a href="tel:{{$cont ? $cont->phone : ''}}" class="d-block text-dark-gray fw-700">{{$cont ? $cont->phone : ''}}</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->

           <!-- start section -->
           <section class="overflow-hidden bg-very-light-gray position-relative">
            <div class="container">
                <div class="row align-items-center mb-5 sm-mb-30px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-lg-5 md-mb-30px"> 
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-0">Professional services</h3>
                    </div> 
                    <div class="col-lg-4 offset-xl-1 last-paragraph-no-margin md-mb-30px"> 
                        <p> </p>
                    </div> 
                    <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right"></i></div> 
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="row align-items-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-12">
                        <div class="outside-box-right-20 sm-outside-box-right-0">
                            <div class="swiper slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start slider item --> 
                                    @foreach ($serstp as $item)
                                       
                                            <div class="swiper-slide">
                                                <!-- start services box style --> 
                                                <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                                    <div class="position-relative">
                                                        <a href="{{ route('services',['slug' => $item->slug]) }}"><img src="{{ asset($item->images) }}" alt=""></a>
                                                    
                                                    </div>
                                                    <div class="bg-white">
                                                        <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                                                            <a href="{{ route('services',['slug' => $item->slug]) }}" class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">{{ucwords($item->title)}}</a>
                                                            <p>{{ucwords($item->heading)}}</p> 
                                                        </div> 
                                                        <div class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                            <a href="{{ route('services',['slug' => $item->slug]) }}" class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
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
                                                        <!-- end slider item -->
                                   @endforeach
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
                        <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Our Moving Process</div>
                        <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Business <span class="text-highlight">timeline<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
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
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Booking & scheduling</span>
                                <p>Confirm the booking along with the moving date and time.</p>
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
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Packing & preparation</span>
                                <p>Pack yourself or hire us for professional packing.</p>
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
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">Loading & transportation</span>
                                <p>On-time and safely loading your belongings onto our trucks.</p>
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
                                <span class="alt-font text-dark-gray fs-20 d-inline-block fw-600 mb-10px">unloading & unpacking</span>
                                <p>Upon arrival, we help you unload, unpack, and settle into your new place.</p>
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
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center mb-8 sm-mb-50px justify-content-md-center"> 
                    <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                        <span class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Why choose us?</span>
                        <h2 class="text-dark-gray fw-700 mb-20px ls-minus-1px">Fully Licensed and Insured for Your Peace of Mind</h2>
                        <div class="row justify-content-center mb-25px">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- start accordion item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                                <div class="accordion-title text-dark-gray sm-pe-0">
                                                   
                                                    <span class="fw-600 fs-20">Licensed & Insured Movers</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                                <p>Move with confidence knowing your belongings are in the hands of licensed and insured 
                                                    professionals. Your peace of mind is our priority.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                    <!-- start accordion item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                                <div class="accordion-title text-dark-gray sm-pe-0">
                                                  
                                                    <span class="fw-600 fs-20">Affordable Rates</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                                <p>Quality moving services don’t have to break the bank. We offer competitive pricing tailored to fit your budget.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                    <!-- start accordion item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                                <div class="accordion-title text-dark-gray sm-pe-0">
                                                
                                                    <span class="fw-600 fs-20">Timely & Professional Service</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-body last-paragraph-no-margin sm-pe-0">
                                                <p>We respect your time and handle every move with precision and care, ensuring a seamless, on-schedule experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('contact') }}" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                                <span> 
                                <span class="btn-text">Get a quote</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                           
                        </div> 
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                        <div class="w-80 ms-auto" data-animation-delay="200" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/9.jpg') }}" alt="" class="border-radius-10px w-100">
                        </div>
                        
                    </div>
                </div>
              
            </div>
        </section>
        <!-- end section -->
        
       
        <!-- start section -->
        <section class="ps-8 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 pt-1 pb-4" id="quote">
            <div class="container-fluid">
                <div class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
                    <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                        <span class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">World best logistics</span>
                        <h2 class="fw-700 text-dark-gray ls-minus-1px mb-45px">Get A Quote</h2>
                        @include('includes.errors')
                        @include('includes.success')
                        <!-- start contact form -->
                        @include('includes.qoute')
                        <!-- end contact form -->
                    </div>
                    <div class="col-lg-4 md-h-700px sm-h-500px">
                        <div class="cover-background background-position-center-top h-100" style="background-image: url({{ asset('images/10.jpg') }});">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    

        @include("includes.footer")
       