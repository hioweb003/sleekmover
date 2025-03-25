<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Blog - Move-Out Cleaning Services</title>
        <meta charset="utf-8">
        @include("includes.header")

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0" style="background-image: url({{ asset('images/banner.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-5 col-sm-8 page-title-double-large text-center" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color fw-700 mb-5px">Blog posts</h1>
                      
                    </div>
                </div>
            </div>
    
        </section>
        <!-- end page t#/ol'litle -->
        <!-- start section -->
        <section class="bg-very-light-gray"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 p-md-0">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                           
                            @forelse ($posts as $item)
                                
                             <!-- start blog item -->
                             <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-quadruple-large">
                                    <div class="blog-image">
                                        <a href="" class="d-block"><img src="{{ asset($item->featured_image) }}" alt="" /></a>
                                    </div>
                                    <div class="card-body p-13 md-p-11">
                                        <a href="" class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block">{{ucwords($item->post_title)}}</a>
                                        <p>{!! Str::words($item->post_description,'12','...') !!}</p>
                                       
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->

                            @empty
                                
                            @endforelse
                          
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4 d-flex justify-content-center">
                        <!-- start pagination -->
                        <ul class="pagination pagination-style-01 fs-13 mb-0" data-anime='{  "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                             {{ $posts->links() }}
                            {{-- <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li> --}}
                        </ul>
                        <!-- end pagination -->
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->

        @include("includes.footer")