<!doctype html>
<html class="no-js" lang="en">
    <head>
    <title>SleekMovers - Stress-Free Moving Services You Can Trust</title>
        <meta charset="utf-8">
        @include("includes.header")
      
        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url({{ asset('images/demo-decor-store-title-bg.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">FAQs</h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li> 
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->
        <section class="position-relative">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8 offset-xl-1 lg-ps-50px md-ps-15px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="col-12">
                            <div class="accordion accordion-style-02" id="accordion-style-01" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                @forelse ($faqs as $item)
                                    
                                 <!-- start accordion item -->
                                 <div class="accordion-item active-accordion">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#{{ $item->faqid }}" aria-expanded="true" data-bs-parent="#accordion-style-01">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-minus"></i><span class="fw-500 fs-18">{{$item->name}}</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="{{ $item->faqid }}" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>{!! $item->body !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->

                                @empty
                                    
                                @endforelse
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        @include("includes.footer")
     