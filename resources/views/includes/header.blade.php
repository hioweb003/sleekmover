<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="SleekMovers Team" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="SleekMovers offers reliable and affordable moving services, including residential and commercial moves, expert packing, and move-out cleaning. Trust us for a stress-free relocation experience." />

        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/> 
        <link rel="stylesheet" href="{{asset('demos/logistics/logistics.css')}}"/>
    </head>
    <body data-mobile-nav-style="classic">

      
        <!-- start header -->
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark bg-dark">
                <div class="container-fluid">
                    <div class="row h-45px align-items-center m-0">
                        <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">
                            <span class="me-25px fs-15 md-m-0">
                                <i class="feather icon-feather-phone-call text-base-color me-10px"></i><span class="text-light-gray">Phone: {{$cont ? $cont->phone : ''}}</span>
                            </span>
                            <span class="d-xl-inline-block d-none fs-15"><i class="feather icon-feather-mail text-base-color me-10px"></i><a href="mailto:{{ $cont ? $cont->email : '' }}" class="widget text-light-gray text-white-hover">{{$cont ? $cont->email : ''}}</a></span>
                        </div>
                        <div class="col-md-5 text-end d-none d-lg-flex fs-15">
                            <a href="http://www.facebook.com" target="_blank" class="me-25px lg-me-15px">Facebook</a>
                            <a href="http://www.twitter.com" target="_blank" class="me-25px lg-me-15px">Twitter</a>
                          
                            <a href="https://www.instagram.com" target="_blank">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
                <div class="container-fluid"> 
                    <div class="col-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="default-logo">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="alt-logo">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Home</a></li> 
                                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About us</a></li>
                                <li class="nav-item dropdown dropdown-with-icon-style02"><a href="{{ route('ouservice') }}" class="nav-link">Our services</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        @foreach ($serstp as $item)
                                              <li><a href="{{ route('services',['slug' => $item->slug]) }}"><i class="line-icon-Plane-2 align-middle text-base-color"></i>{{ucwords($item->title)}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li class="nav-item"><a href="{{ route('shp') }}" class="nav-link">Shop</a></li> --}}
                                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex"> 
                        <div class="header-icon">
                            <div class="d-none d-xl-inline-block"><div class="fw-600"><a href="tel:{{$cont ? $cont->phone : ''}}" class="widget-text"><i class="feather icon-feather-phone-call me-10px"></i>{{$cont ? $cont->phone : ''}}</a></div></div>
                            <div class="header-button ms-25px">
                                <a href="{{ route('contact') }}" class="btn btn-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                                    <span> 
                                        <span class="btn-text">Get a quote</span>
                                        <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->