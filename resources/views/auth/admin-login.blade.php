<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Login</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32"href="{{asset('images/favicon.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}"/>
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
                <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    <h2 class="text-center text-uppercase mt-3 pt-3">{{config('app.name')}} Admin</h2>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-center">Login</div>
                                    <div class="card-body">
                                            @include('includes.success')
                                    @include('includes.errors')
                                        <form action="{{route('admin.login')}}" method="POST">
                                            @csrf 
                                             <div class="form-group">
                                                <label for="username" class="control-label">Username</label>
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{old('username')}}" autofocus>
                                                
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <p class="text-danger">{{ $message }}</p>
                                                </span>
                                                @enderror
                                             </div>
                                            <div class="form-group">
                                                         <label for="inputPassword3" class="control-label">Password</label>
                                           
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                            id="inputPassword3">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="text-danger">{{ $message }}</p>
                                    </span>
                                @enderror
                                            </div>
                                            
                                            
                                        <div class="form-group">
                                            <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-success btn-md px-4 my-3">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
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
        <script src="{{ asset('ad/js/toastr.js') }}"></script>
       <script>
        $(document).ready(function() {
           setTimeout(function() {
             $("#alert").fadeOut(slow);
           },1000);
        });
       </script>
@yield('script')

</body>
</html>
