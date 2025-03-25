<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>SleekMovers - Packing Services</title>
        
        <meta charset="utf-8">
        @include("includes.header")
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{ asset('images/banner.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-9 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px text-uppercase">PROFESSIONAL PACKING SERVICES</h1>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

         <!-- start section --> 
         <section class="position-relative">
            <div class="container">
                <img src="{{asset('images/demo-logistics-home-bg-01.jpg')}}" class="position-absolute bottom-10px right-0px z-index-minus-1" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 md-mb-50px" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <img src="{{asset('images/17.jpg')}}" class="w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">{{ucwords($serv->heading)}}</h2>
                        <p class="w-100 lg-w-100">{!! $serv->details !!}</p>
                       
                        
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
                                    <span class="d-block fw-500">Get a Quote</span>
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
         <section class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 md-mb-20px sm-mb-0" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <h3 class="text-dark-gray fw-600 ls-minus-2px alt-font">Our moving services are tailored to provide a seamless transition for your business.</h3> 
                    </div>
                    <div class="col-lg-7" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px"> <i class="bi bi-buildings-fill"></i> FULL PACKING</div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>Our residential moving specialists will carefully pack your household belongings, ensuring each item is securely wrapped and properly organized for a seamless move. Our comprehensive packing service is perfect for 
                                    anyone unable to handle the packing process themselves, regardless of the reason.</p>
                            </div>
                        </div>
                        <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"></div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px"> <i class="bi bi-truck-front-fill"></i> LABELLING ITEMS</div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>We carefully label each box containing fragile items, using clear, easy-to-read tags for efficient handling. These labels make it simple to organize boxes during loading and unloading 
                                    while ensuring they remain upright and secure throughout the entire move.</p>
                            </div>
                        </div>
                        <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"></div>
                        <div class="row">
                            <div class="col-md-5">
                           
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px"><i class="bi bi-house-door"></i> KITCHEN AND FRAGILE PACKING</div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>We handle the packing of your fragile kitchen items, including glassware, ceramics, crystal, electronics, artwork, and more. Using premium packing materials, our team ensures these delicate belongings are 
                                    securely packed, clearly labeled, and safely unpacked at your new destination.</p>
                            </div>
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
                        <div class="cover-background background-position-center-top h-100" style="background-image: url({{asset('images/10.jpg')}});">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        

        @include("includes.footer")