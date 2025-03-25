<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="SleekMovers Team" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
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
        <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
        
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header class="header-with-topbar">
            <!-- start header top bar -->
           
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-transparent disable-fixed" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="default-logo">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="alt-logo">
                            <img src="{{asset('images/logo.png')}}" data-at2x="{{asset('images/logo.png')}}" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static xs-ps-0">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                            <ul class="navbar-nav alt-font"> 
                                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                @foreach($categories as $slug => $name)
                                <li class="nav-item"><a href="{{ route('shp', ['category' => $slug]) }}" class="nav-link">{{ $name }}</a></li>
                              @endforeach
                                 {{--  <li class="nav-item"><a href="{{ route('shp',['category' => 'equipment']) }}" class="nav-link">Equipment</a></li>
                                <li class="nav-item"><a href="{{ route('shp',['category' => 'mattress covers']) }}" class="nav-link">Mattress Covers</a></li>                   
                                <li class="nav-item"><a href="{{ route('shp',['category' => 'tv & art boxes']) }}" class="nav-link">TV & Art Boxes</a></li>
                                <li class="nav-item"><a href="{{ route('shp',['category' => 'moving kits']) }}" class="nav-link">Moving Kits</a></li>
                                <li class="nav-item"><a href="{{ route('shp',['category' => 'packing']) }}" class="nav-link">Packing</a></li>
                                <li class="nav-item"><a href="{{ route('shp',['category' => 'wrapping']) }}" class="nav-link">Wrapping</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="header-icon">
                            <div class="header-search-icon icon">
                                {{-- <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a> 
                                <div class="search-form-wrapper">
                                    <button title="Close" type="button" class="search-close alt-font">×</button>
                                    <form id="search-form" role="search" method="get" class="search-form bg-white" action="search-result.html">
                                        <div class="search-form-box">
                                            <h2 class="text-dark-gray text-center mb-7 alt-font fw-700 ls-minus-1px">What are you looking for?</h2>
                                            <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                            <button type="submit" class="search-button">
                                                <i class="feather icon-feather-search" aria-hidden="true"></i> 
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                            <div class="header-cart-icon icon">
                                <div class="header-cart dropdown">
                                    <a href="javascript:void(0);"><i class="feather icon-feather-shopping-bag"></i><span class="cart-count alt-font">{{Cart::count()}}</span></a> 
                                    <ul class="cart-item-list">
                                        @foreach (Cart::content() as $items)
                                             <li class="cart-item align-items-center">
                                            <a href="{{route('removeitem',['id' => $items->rowId])}}" class="alt-font close">×</a>
                                            <div class="product-image">
                                                <a href="javascript:void(0);"><img src="{{asset($items->model->image)}}" class="cart-thumb" alt=""></a>
                                            </div>
                                            <div class="product-detail alt-font fw-600">
                                                <a href="javascript:void(0);">{{$items->name}}</a>
                                                <span class="item-ammount fw-500">{{$items->qty}} x CA$ {{$items->price}}</span> 
                                            </div>
                                        </li>
                                        @endforeach
                                       
                                       
                                        <li class="cart-total">
                                            <div class="alt-font mb-15px"><span class="w-50 fw-500">Subtotal:</span><span class="w-50 text-end fw-700">CA${{Cart::subtotal()}}</span></div>
                                            <a href="{{route('cart.index')}}" class="btn btn-large btn-transparent-base-color border-color-extra-medium-gray btn-round-edge">View cart</a>
                                            <a href="{{route('checkout')}}" class="btn btn-large btn-base-color btn-box-shadow btn-round-edge">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="widget-text ms-25px md-ms-20px alt-font">
                                <a href="#" class="fs-17 fw-600"><i class="feather icon-feather-user d-inline-block d-xl-none"></i><span class="d-none d-xl-inline-block">My account</span></a>
                            </div> --}}
                        </div>  
                    </div>
                </div>
            </nav>
        </header>