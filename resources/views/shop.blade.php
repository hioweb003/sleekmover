<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>SleekMovers - shop</title>
        <meta charset="utf-8">
        @include("includes.header-shop")

        <!-- end header -->
        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url({{ asset('images/banner-store.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">Collections</h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="position-relative pb-0">
            <div class="container">
               
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 justify-content-center align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <?php $i=0;?>
                    @foreach($categories as $item)
                    <!-- start categories item -->
                    <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                        <div class="categories-box">
                            <div class="icon-box position-relative mb-10px">
                                <a href="{{ route('shp', ['category' => $item['slug']]) }}"><img src="{{ asset($item['imagge']) }}" alt=""/></a>
                                <div class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">{{$i+1}}</div>
                            </div>
                            <a href="{{ route('shp', ['category' => $item['slug']]) }}" class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover">{{ ucwords($item['name']) }}</a>
                        </div>
                    </div>
                    <!-- end categories item -->
                    <?php $i++;?>
                    @endforeach
                  
                </div>
            </div>
        </section>
        <!-- end section -->

          <!-- start section -->
          <section class="ps-6 pe-6 lg-ps-3 lg-pe-3 sm-ps-0 sm-pe-0">
            <div class="container-fluid">
                <div class="row"> 
                <div class="col-12 text-center position-relative page-title-extra-large pb-3">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">Products</h1>
                    </div>
                    <div class="col-12 pe-5 md-pe-15px md-mb-60px">
                     
                        <ul class="shop-boxed shop-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                          @foreach ($products as $item)
                                <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box pb-25px">
                                    <div class="shop-image">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset($item->image) }}" alt="" />
                                            {{-- <span class="lable new">New</span> --}}
                                            <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div> 
                                        </a>
                                        <div class="shop-hover d-flex justify-content-center">
                                            {{-- <a href="#" class="bg-white w-45px h-45px text-dark-gray d-flex flex-column align-items-center justify-content-center rounded-circle ms-5px me-5px box-shadow-medium-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="feather icon-feather-heart fs-15"></i></a> --}}
                                            <a href="{{ route('addtocart') }}?addtocart={{ $item->id }}" class="bg-white w-45px h-45px text-dark-gray d-flex flex-column align-items-center justify-content-center rounded-circle ms-5px me-5px box-shadow-medium-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to cart"><i class="feather icon-feather-shopping-bag fs-15"></i></a>
                                            {{-- <a href="#" class="bg-white w-45px h-45px text-dark-gray d-flex flex-column align-items-center justify-content-center rounded-circle ms-5px me-5px box-shadow-medium-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick shop"><i class="feather icon-feather-eye fs-15"></i></a> --}}
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center pt-20px">
                                        <a href="javascript:void(0)" class="text-dark-gray fs-17 alt-font fw-600">{{ucwords($item->pro_name)}}</a>
                                        <div class="fw-500 fs-15 text-dark lh-normal">CA$ {{number_format($item->price,2)}}</div>
                                        <a href="{{ route('addtocart') }}?addtocart={{ $item->id }}" class="text-sm text-dark-gray d-lg-none d-sm-block d-flex align-items-center justify-content-center rounded-2 ms-5px me-5px mt-3">Add to cart&nbsp;<i class="feather icon-feather-shopping-bag fs-15"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                          @endforeach
                           
                        </ul>
                        <div class="w-100 d-flex mt-3 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                              {{ $products->links() }}
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->

          
        <!-- start section -->
   @section('script')
   <script>
    @if (session()->has('success'))  
    toastr.success("{{session()->get('success')}}");
     @endif

      @if (session()->has('warning'))  
    toastr.warning("{{session()->get('warning')}}");
     @endif
     @if (session()->has('error'))  
    toastr.error("{{session()->get('error')}}");
     @endif
  </script>
   @endsection  
  
        <!-- end section -->
        @include("includes.footer")