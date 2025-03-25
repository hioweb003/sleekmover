<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        
        @include("includes.header-shop")

       
        <!-- start section -->
        <section>
            <div class="container">
   <!-- start section style="background-image: url(images/404-bg.jpg);"-->  
   <section class="cover-background">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="text-dark-gray fw-700 ls-minus-6px">ORDER COMPLETED !</h1>
                <h4 class="text-dark-gray fw-600 sm-fs-22 mb-10px ls-minus-1px">Thank you</h4>
                <p class="mb-30px lh-28 sm-mb-30px">You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your order.</p>
                <a href="{{ route('shp') }}" class="btn btn-large left-icon btn-rounded btn-dark-gray btn-box-shadow text-transform-none"><i class="fa-solid fa-arrow-left"></i>Back to homepage</a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
</div>
</section>
<!-- end section -->  

@include("includes.footer")