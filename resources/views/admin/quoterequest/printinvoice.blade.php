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
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <!-- Datatables styles -->
      <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet" />
      <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
    <!-- Styles -->
   
   <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toastr.min.css')}}" rel="">
    
</head>
<body>
<div class="container-fluid">
     <div class="text-center justify-content-center my-4 p-4">
         <h1>Elyon Global shipping</h1> 
         <p>Email: info@elyonship.com Phone: +234 802 1147 025</p>
     </div>
       
                   
                                     <div class="table-responsive">
                                    <table class="table table-bordered" id="category2">
                                    
                                        <tbody> 
                                       <h4 class="my-3">Shipping Information</h4><hr>
                                        <tr><td>Name </td><td>{{$prtqtitem->name}}</td></tr>
                                        <tr><td>Position </td><td>{{$prtqtitem->position}}</td></tr>
                                        <tr><td>Email </td><td>{{$prtqtitem->email}}</td></tr>
                                        <tr><td>Phone </td><td>{{$prtqtitem->phone}}</td></tr>   
                                        <tr><td>Country</td><td>{{$prtqtitem->country}}</td></tr> 
                                        <tr><td>Company </td><td>{{$prtqtitem->company}}</td></tr>
                                         <tr><td>Loading Port </td><td>{{$prtqtitem->port_loading}}</td></tr> 
                                         <tr><td>Discharging Port </td><td>{{$prtqtitem->port_discharge}}</td></tr>
                                        <tr><td>Unit</td><td>{{$prtqtitem->unit}}</td></tr>     
                                        <tr><td>Shippment Date</td><td>{{$prtqtitem->date_qoute}}</td></tr>     
                                        </tbody>
                                    </table>
                                </div>
                                 <p>Description</p>
                                    <p>
                                        {{$prtqtitem->description}}
                                    </p>
                               
  <div class="row mt-5">
            
                      <div class="col-md-6">
                  
                          <h5 class="float-right ">Signature<span>_________________</span></h5> 
                     </div>
                 </div> 
                  
</div>


   <script src="{{ asset('js/jquery.min.js') }}"></script>
               <script src="{{ asset('js/jqueryprintpage.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
              <script src="{{ asset('js/bootstrap.min.js') }}"></script>
               <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
               <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
              <script src="{{ asset('js/scripts.js') }}"></script>
            <script src="{{ asset('js/all.js') }}"></script>
             <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
           <script src="{{asset('js/printpage.js')}}"></script>
             <script src="{{ asset('js/sweetalert.js') }}"></script>
          
         
{{--
                          <div class="row d-flex">
                                              <div class="col-md-6">
                                              <div class="card  float-left">
                                                  <div class="card-header">From </div>
                                              <div class="card-body">
                                            <p>Country: {{$prtqtitem->fromcountry}}</p>
                                              <p>City: {{$prtqtitem->fromcity}}</p> 
                                                
                                              </div>
                                          </div>
                                          </div>

                                           <div class="col-md-6">
                                              <div class="card float-right">
                                                  <div class="card-header">To </div>
                                              <div class="card-body">
                                                <p>Country: {{$prtqtitem->tocountry}}</p>
                                              <p>City: {{$prtqtitem->tocity}}</p>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                     
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category2">
                                    
                                        <tbody> 
                                       <h4>Parcel Information</h4><hr>
                                        <tr><td>Name </td><td>{{$prtqtitem->name}}</td></tr>
                                        <tr><td>Email </td><td>{{$prtqtitem->email}}</td></tr>
                                        <tr><td>Phone </td><td>{{$prtqtitem->phone}}</td></tr> 
                                         <tr><td>Location </td><td>{{$prtqtitem->location}}</td></tr>                                       
                                      
                                             <tr><td>Shipping Date </td><td>{{$prtqtitem->shipdate}}</td></tr>
                                        </tbody>
                                    </table>
                                </div>
  <div class="row mt-5">
            
                      <div class="col-md-6">
                  
                          <h5 class="float-right ">Signature<span>_________________</span></h5> 
                     </div>
                 </div> 
--}}
</body>
</html>