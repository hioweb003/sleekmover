<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Blog</title>
        <meta charset="utf-8">
        @include("includes.header")

        <!-- start section -->
        <section class="one-fourth-screen bg-dark-gray ipad-top-space-margin sm-mb-50px" data-parallax-background-ratio="0.5" style="background-image: url({{ asset($posts->featured_image) }})"></section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 overlap-section text-center">
                        <div class="p-10 box-shadow-extra-large border-radius-4px bg-white text-center">
                            {{-- <a href="#" class="bg-very-light-gray text-uppercase fs-13 ps-25px pe-25px fw-700 text-dark-gray text-dark-gray-hover lh-40 sm-lh-55 border-radius-100px d-inline-block mb-3 sm-mb-15px"></a> --}}
                            <h3 class="text-dark-gray fw-700 ls-minus-1px mb-15px">{{ucwords($posts->post_title)}}</h3>
                            <div class="lg-20px sm-mb-0">
                                <span>By <a href="#" class="text-dark-gray fw-500">{{$posts->user->name}}</a></span> on <a href="#" class="text-dark-gray fw-500">{{date("d M Y",strtotime($posts->created_at))}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overlap-section text-center p-0 sm-pt-30px">
            <img class="rounded-circle box-shadow-extra-large w-130px h-130px border border-8 border-color-white" src="{{asset('images/logo.png')}}" alt=""> 
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0 pt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 dropcap-style-01" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <p class="mb-6">{!! $posts->post_description !!}</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
       
      
        <!-- start section -->
        <section class="pb-0">
            <div class="container" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center mb-2"> 
                        <h6 class="text-dark-gray fw-600">{{ $posts->comments->count() }} Comments</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul class="blog-comment">
                           @forelse ($posts->comments as $item)
                                <li>
                                    <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
                                        <div class="w-90px sm-w-65px sm-mb-10px">
                                            <img src="{{asset('images/logo.png')}}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="w-100 ps-30px last-paragraph-no-margin sm-ps-0">
                                            <a href="#" class="text-dark-gray fw-600">{{ucwords($item->name)}}</a>
                                            {{-- <a href="#comments" class="btn-reply text-uppercase section-link">Reply</a> --}}
                                            <div class="fs-14 lh-24 mb-10px">{{date("d M Y,H:i a",strtotime($item->created_at))}}</div>
                                            <p class="w-85 sm-w-100">{{$item->description}}</p>
                                        </div>
                                    </div>
                                </li>
                           @empty
                               
                           @endforelse
                        </ul> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="comments">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 mb-3 sm-mb-6">
                        <h6 class="text-dark-gray fw-600 mb-5px">Write a comment</h6>
                        <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        @include('includes.errors') 
                        
                        <form action="{{ route('addcomments') }}" id="commtform" method="post" class="row contact-form-style-02">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $posts->id }}">

                            <div class="col-md-6 mb-30px">
                                <input class="input-name border-radius-4px form-control required" type="text" required name="name" placeholder="Enter your name*">
                            </div> 
                            <div class="col-md-6 mb-30px">
                                <input class="border-radius-4px form-control required" type="email" name="email" required placeholder="Enter your email address*">
                            </div> 
                            <div class="col-md-12 mb-30px">
                                <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment" required placeholder="Your message"></textarea>
                            </div> 

                            <input type="hidden" name="redirct" value="{{ URL::current() }}#cmmtsucc">
                            <input type="hidden" name="google_recaptcha_response" id="grecaptcharcmmt">
                            <div class="col-12">
                              
                                <button class="btn btn-dark-gray btn-small btn-round-edge" type="button" onclick="onClickform(event,'grecaptcharcmmt','commtform','addcomments')">Post Comment</button>
                                <div class="form-results mt-20px" id="cmmtsucc">
                                    @include('includes.success')
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        @include("includes.footer")