<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>SleekMovers - Residential Moving</title>
        
        <meta charset="utf-8">
    @include("includes.header")
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{ asset('images/banner.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-9 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px text-uppercase">Residential Moving</h1>
                       
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
                        <img src="{{asset('images/4.jpg')}}" class="w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">{{ucwords($serv->heading)}}</h2>
                        <p class="w-90 lg-w-100"> {!! $serv->details !!} </p>
                       
                        
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
        <section class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0">
            <div class="container-fluid"> 
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-5 col-lg-7 col-md-8 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">RESIDENTIAL MOVING SERVICES FOR ALL YOUR NEEDS</span>
                        <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Planning Your Residential Move Today?</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                        <div class="atropos" data-atropos data-atropos-perspective="1450">
                        
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                            <img class="w-100" src="{{asset('images/11.jpg')}}" alt="" />
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                                <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">SleekMovers</div>
                                                <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28 sm-mb-5px">Apartment Moving</span>
                                              
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-1"></div>
                                                <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banner item --> 
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                        <div class="atropos" data-atropos data-atropos-perspective="1450">
                          
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                            <img class="w-100" src="{{asset('images/12.jpg')}}" alt="" />
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                            <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">SleekMovers</div>
                                                <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">House Moving</span>
                                             
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-1"></div>
                                                <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end interactive banner item --> 
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-05 sm-mb-30px position-relative z-index-1">
                        <div class="atropos" data-atropos data-atropos-perspective="1450">
                          
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                            <img class="w-100" src="{{asset('images/13.jpg')}}" alt="" />
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                            <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">SleekMovers</div>
                                                <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">High-Rise Buildings</span>
                                               
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-1"></div>
                                                <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banner item --> 
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-05 position-relative z-index-1">
                        <div class="atropos" data-atropos data-atropos-perspective="1450">
                           
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                            <img class="w-100" src="{{asset('images/14.jpg')}}" alt="" />
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                            <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">SleekMovers</div>
                                                <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Condo Moving</span>
                                          
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-1"></div>
                                                <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end interactive banner item --> 
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