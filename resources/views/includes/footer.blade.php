 <!-- start footer --> 
 <footer class="fs-17 footer-dark p-0 bg-dark-gray"> 
            <div class="container"> 
                <div class="row justify-content-center pt-6 sm-pt-40px text-sm-start text-center">
                    <!-- start footer column -->
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 md-mb-30px">
                        <a href="{{ url('/') }}" class="footer-logo mb-20px d-inline-block"> 
                            <img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo.png') }}" alt="">
                        </a>
                        <p class="fs-17 mx-auto xs-w-90">Your Reliable Partner for Residential & Commercial Moves, 
                            Expert Packing, and Spotless Move-Out Cleaning.</p> 
                      
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-2 col-md-3 col-sm-5 offset-xl-1 offset-md-0 offset-sm-1 md-mb-30px">
                        <span class="fs-18 d-block text-white fw-500 mb-10px">Quick Link</span>
                        <ul>
                        
                            <li><a href="{{route('about')}}">About Us</a></li>
                            {{-- <li><a href="{{ route('shp') }}">Shop</a></li> --}}
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('blog') }}">Blogs</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <div class="col-lg-2 col-md-3 col-sm-5 offset-xl-1 offset-md-0 offset-sm-1 md-mb-30px">
                        <span class="fs-18 d-block text-white fw-500 mb-10px">Our services</span>
                        <ul>
                          @foreach ($serstp as $item)
                                <li><a href="{{ route('services',['slug' => $item->slug]) }}">{{ucwords($item->title)}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-10 col-sm-6 text-md-center text-lg-start order-last order-sm-4">
                        <span class="fs-18 d-block text-white fw-500 mb-10px">Keep in touch with us</span>
                        <p class="mb-20px fs-17 mx-auto xs-w-90">Subscribe our newsletter to get the latest news and updates.</p>
                        <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px" id="nwmsg">
                            @session('newssucess')
                                <p class="text-success">{{$newssucess}}</p>
                            @endsession
                            @include('includes.errors')
                            <form action="{{ route('addnewsletter') }}" id="newsletterform" method="post" class="position-relative w-100">
                                <input class="bg-transparent border-color-transparent-white-light w-100 form-control required" type="email" name="email" placeholder="Enter your email">
                                <input type="hidden" name="redirect" value="{{URL::current()}}#nwmsg">
                                <input type="hidden" name="google_recaptcha_response" id="grecaptcharnewslter">
                                <button class="btn submit" type="button" onclick="onClickform(event,'grecaptcharnewslter','newsletterform','addnewsletter')" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-white"></i></button>
                                <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                        <div class="d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-sm-start justify-content-center">
                            <i class="line-icon-Handshake align-middle icon-medium me-10px"></i>
                            <span class="fs-16">Protecting your privacy</span>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div> 
                <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
                    <div class="col-12">
                        <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                    </div>
                    <div class="col-lg-9 pt-25px pb-25px fs-15 last-paragraph-no-margin text-center order-2 order-sm-1"><p>This site is protected by reCAPTCHA and the Google <a href="#" class="text-decoration-line-bottom">privacy policy</a> and <a href="#" class="text-decoration-line-bottom">terms of service</a> apply. You must not use this website if you disagree with any of these website standard terms and conditions.</p></div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>

        <script>
        function onClickform(e,grecaptchar,fromtyp,urlaction) {
          e.preventDefault();
          grecaptcha.ready(function() {
            grecaptcha.execute('{{env("RECAPTCHA_SITE_KEY")}}', {action: urlaction}).then(function(token) {
                document.getElementById(grecaptchar).value=token;
                document.getElementById(fromtyp).submit();
            });
          });
        }
        </script>
        @yield('script')
    </body>
</html>