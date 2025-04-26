<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Fonts -->
    <link href="{{ asset('ad/css/all.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <!-- Datatables styles -->
      <link href="{{asset('ad/css/jquery.dataTables.css')}}" rel="stylesheet" />
      <link href="{{asset('ad/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
    <!-- Styles -->
   
   <link href="{{asset('ad/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('ad/css/toastr.min.css')}}" rel="">
    
</head>
<body class="sb-nav-fixed">
          
                <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                            <a class="navbar-brand" href="{{route('admin.dashboard')}}">{{ config('app.name', 'SleekMovers') }}</a>
                              @if (Auth::check())
                            <button class="btn btn-link btn-sm order-1 order-lg-0 text-white" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                            <!-- Navbar Search-->
                                @endif
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                              
                            </form>
                            <!-- Navbar-->
                            <ul class="navbar-nav ml-auto ml-md-0">
                          
                                  @if (Auth::check())
                                      <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                      <a class="dropdown-item"  href="{{url('/')}}" target="_blank" >Vist Site</a>
                                        <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="{{route('password.change')}}"><span class="fas fa-key"></span>&nbsp;Change Password</a>
                                  
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('admin.logout')}}"><span class="fas fa-sign-out-alt"></span>&nbsp;Logout</a>
                                    </div>
                                </li> 
                                  @endif
                            </ul>
                    </nav>
                  
                    <div id="layoutSidenav">
                                     <!--Sidebar Navbar-->
                                             <div id="layoutSidenav_nav">
                                                    @if (Auth::check())
                                                      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                                        <div class="sb-sidenav-menu">
                                                          <div class="nav">
                                                              <div class="sb-sidenav-menu-heading"></div>
                                                          <a class="nav-link text-white" href="{{route('admin.dashboard')}}"><div class="sb-nav-link-icon"></div> Dashboard</a>

                                                          <a class="nav-link collapsed text-white" href="#" data-toggle="collapse" data-target="#shpcollapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                                          ><div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                                          Shop
                                                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                                      <div class="collapse" id="shpcollapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                          <nav class="sb-sidenav-menu-nested nav">
                                                            <a class="nav-link" href="{{route('product.index')}}">All Product</a>
                                                            <a class="nav-link" href="{{route('product.create')}}">Add New</a>
                                                            <a class="nav-link" href="{{route('admin.category.index')}}">Categories</a>
                                                          </nav>
                                                      </div>

                                                          <a class="nav-link text-white" href="{{ route('admin.order.index') }}"><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>Order  &nbsp;<span class="badge badge-danger ordnum"></span></a>

                                                             <a class="nav-link text-white" href="{{route('news')}}"><div class="sb-nav-link-icon"><i class="fab fa-speakap"></i></div>Subcribers</a>

                                                             {{-- <a class="nav-link text-white" href="{{route('team.index')}}"><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Our Team</a> --}}

                                                              {{-- <a class="nav-link text-white" href="{{route('allstudents')}}"><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>Students</a> --}}
                                                              <a class="nav-link text-white" href="{{route('tes.index')}}"><div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Testimonial</a>

                                                               <a class="nav-link text-white" href="{{route('ser.index')}}"><div class="sb-nav-link-icon"><i class="fas fa-hands"></i></div>Services</a>
                                                              
                                                               <a class="nav-link collapsed text-white" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                                                  ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                                                Blog
                                                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                                              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                                  <nav class="sb-sidenav-menu-nested nav">
                                                                    <a class="nav-link" href="{{route('post.index')}}">All Posts</a>
                                                                    <a class="nav-link" href="{{route('post.create')}}">Add New</a>
                                                                    {{-- <a class="nav-link" href="{{route('category.index')}}">Categories</a> --}}
                                                                  </nav>
                                                              </div>

                                                            

                                                              <a class="nav-link text-white" href="{{route('admin.roquote')}}"><div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Quotes  &nbsp;<span class="badge badge-danger rorqut">0</span></a>

                                                               <a class="nav-link text-white" href="{{route('admin.faq')}}"><div class="sb-nav-link-icon"><i class="fas fa-microphone"></i></div>Faq</a>
                                                               
                                                               {{-- <a class="nav-link text-white" href="{{route('admin.consultation')}}"> <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Manage Consultation</a> --}}

                                                               <a class="nav-link text-white" href="{{route('admin.contact')}}"> <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Contact</a>
                                                      
                                                               <a class="nav-link text-white" href="{{route('about.bio')}}"><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>About Us</a>

                                                                {{-- <a class="nav-link text-white" href="{{route('vision')}}"><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Vision</a>

                                                               <a class="nav-link text-white" href="{{route('mission')}}"><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Mission</a> --}}

                                                               {{-- <a class="nav-link text-white" href="{{route('terms')}}"><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Terms & condition</a> --}}
                                                               
                                                               {{-- <a class="nav-link text-white" href="{{route('privacy')}}"><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Privacy Policy</a>   --}}
                                                              
                                                               {{-- <a class="nav-link text-white" href="{{route('bookin.index')}}"><div class="sb-nav-link-icon"></div>Appointments <div class="badge badge-danger ml-5 bknum"></div> </a> --}}
                                                          {{-- <a class="nav-link" href="{{route('contact.mail')}}"><div class="sb-nav-link-icon"><i class="fas fa-mail-bulk"></i></div>Contact  &nbsp;<div class="badge badge-danger">{{$conscount->count()}}</div></a> --}}
                                                              
                                                                @if (Auth::user()->roles == 1)
                                                                    <a class="nav-link text-white" href="{{route('admin.user')}}"><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div> Users</a>
                                                                    @endif
                                                            
                                                            

                                                            <a class="nav-link text-white" href="{{route('admin.logout')}}"><div class="sb-nav-link-icon"><span class="fas fa-sign-out-alt"></span></div>&nbsp;Logout</a>
                                                      </div>
                                                    <div class="sb-sidenav-footer mt-5">
                                                        <div class="small">Logged in as: {{ Auth::user()->name }}</div>
                                                        @if (Auth::user()->roles == 1)
                                                            Admin
                                                            @else
                                                            User
                                                        @endif
                                                    </div>
                                                 </nav>
                                                   @endif
                                              </div>
                                    
                                            <div id="layoutSidenav_content">
                                                  <main>
                                                       <div class="container">
                                                          
                                                       </div>
                                                      @yield('content')
                                                  </main>
                                            </div>
                      </div>

                  
              <script src="{{ asset('ad/js/jquery.min.js') }}"></script>
            <script src="{{ asset('ad/js/popper.min.js') }}"></script>
              <script src="{{ asset('ad/js/bootstrap.min.js') }}"></script>
               <script src="{{ asset('ad/js/jquery.dataTables.js') }}"></script>
               <script src="{{ asset('ad/js/dataTables.bootstrap4.js') }}"></script>
              <script src="{{ asset('ad/js/scripts.js') }}"></script>
            <script src="{{ asset('ad/js/all.js') }}"></script>
             <script src="{{ asset('ad/js/ckeditor/ckeditor.js') }}"></script>
            <script src="{{ asset('ad/js/toastr.min.js') }}"></script>
           <script>
            $(document).ready(function() {
               setTimeout(function() {
                 $("#alert").fadeOut();
               },1000);
            });

            // setInterval(() => {
            //            $.get('',(data) => {
            //             //  console.log(data);
            //                $(".bknum").text(data).addClass("badge-danger");
            //            });
            //        },2000);

            setInterval(() => {
                       $.get('{{route("admin.getord")}}',(data) => {
                        //  console.log(data);
                           $(".ordnum").text(data).addClass("badge-danger");
                           $(".ordnumda").text(data);
                       });
                   },2000);

            setInterval(() => {
                       $.get('{{route("getrorqoute")}}',(data) => {
                        //  console.log(data);
                           $(".rorqut").text(data);
                       });
                   },2000);
                   
               
           </script>
           <script>
             function uploadbrok(){
               $("#broupload").modal("show");
             }
           </script>
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
    @yield('script')

</body>
</html>
