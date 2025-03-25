<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Contact SleekMovers - Move-Out Cleaning Services</title>
        <meta charset="utf-8">
        @include("includes.header")

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{ asset('images/banner.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-9 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Contact us</h1>
                      
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 md-mb-40px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        <div class="position-sticky top-120px md-top-0px md-position-relative">
                          
                            <h2 class="text-dark-gray mb-20px fw-700 ls-minus-1px">Let’s Get You Moving!</h2>
                             <a href="#" class="btn btn-large btn-switch-text btn-dark-gray left-icon btn-box-shadow btn-round-edge">
                                <span>
                                    <span><i class="bi bi-telephone-outbound"></i></span>
                                    <span class="btn-double-text" data-text="Schedule a call">Schedule a call</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1">
                        <div class="row row-cols-1 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <!-- start services box item -->
                            <div class="col services-box-style-02 mb-30px">
                                <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="h-100 cover-background xs-h-300px" style="background-image: url(https://placehold.co/350x350)"></div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-30px">
                                        <div class="services-box-content last-paragraph-no-margin">
                                            <span class="d-block text-dark-gray fw-700 fs-19 mb-10px">Abbotsford, BC</span>
                                            <p>{{ $cont ? $cont->address : '' }}</p>
                                            <a href="#" class="fs-17 lh-22 fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px">View on map</a>
                                            <div class="text-dark-gray fw-600"><i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i><a href="tel:{{ $cont ? $cont->phone : '' }}">{{ $cont ? $cont->phone : '' }}</a></div>
                                            <div class="text-dark-gray fw-600"> <i class="bi bi-envelope"></i> <a href="mailto:{{ $cont ? $cont->email : '' }}">{{ $cont ? $cont->email : '' }}</a></div>
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                            <!-- end services box item --> 
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        
        <!-- start section -->
        <section class="pt-1">
            <div class="container" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                <div class="row row-cols-md-1 justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-very-light-gray p-8 border-radius-10px">
                            <div class="row">
                                <div class="col-12 text-center mb-6">
                                    <span class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Get in touch with us</span>
                                    <h2 class="text-dark-gray mb-0 fw-700 ls-minus-1px">How we can help you?</h2>
                                </div>
                            </div>
                          <div id="cntmg">
                            @include('includes.success')
                            @include('includes.errors') 
                          </div>
                            <!-- start contact form -->
                            <form id="contactfrom" action="{{route('sendmail')}}" method="post" class="row contact-form-style-01">
                                @csrf
                                <div class="col-md-6 mb-20px">
                                    <div class="position-relative form-group">
                                        <span class="form-icon"><i class="bi bi-person"></i></span>
                                        <input class="input-name form-control required" type="text" name="name" placeholder="Your name*" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20px">
                                    <div class="position-relative form-group">
                                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                        <input class="form-control" type="tel" name="phone" placeholder="Your phone" />
                                    </div>                                        
                                </div>
                                <div class="col-md-6 mb-20px">
                                    <div class="position-relative form-group">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input class="form-control required" type="email" name="email" placeholder="Your email address*" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20px">
                                    <div class="position-relative form-group">
                                        <span class="form-icon"><i class="bi bi-journals"></i></span>
                                        <input class="form-control" type="text" name="subject" placeholder="Your subject" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30px">
                                    <div class="position-relative form-group form-textarea">
                                        <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                        <textarea class="form-control" cols="40" rows="4" name="message" placeholder="Your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                    <p class="text-center text-md-start fs-16 lh-24">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                </div>
                                <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                    <input type="hidden" name="redirect" value="{{ route('contact') }}#cntmg">
                                    <input type="hidden" name="google_recaptcha_response" id="grecaptcharcnt">

                                    <button class="btn btn-large btn-dark-gray btn-box-shadow btn-round-edge btn-switch-text left-icon" type="button" onclick="onClickform(event,'grecaptcharcnt','contactfrom','sendmail')">
                                        <span>
                                            <span><i class="feather icon-feather-mail"></i></span>
                                            <span class="btn-double-text" data-text="Send message">Send message</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-12">
                                    <div class="form-results mt-20px"></div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mt-8">
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0">Connect with social media </h6>
                        </div>
                        <div class="col-2 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>
                        <!-- start social icon -->
                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                               
                                <li class="m-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>      
                                <li class="m-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                                <li class="m-0"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                            </ul>                  
                        </div>
                        <!-- end social icon -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 
        @include("includes.footer")