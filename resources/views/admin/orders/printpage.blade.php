<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Invoice</title>

  
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
    <!-- Fonts -->
    <link href="{{ asset('ad/css/all.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <!-- Datatables styles -->
      <link href="{{asset('ad/css/jquery.dataTables.css')}}" rel="stylesheet" />
      <link href="{{asset('ad/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
    <!-- Styles -->
   <link href="{{asset('ad/css/styles.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('ad/css/toastr.min.css')}}">
<style>
  @media print{
    .no-print{
      display: none;
    }
  }
</style>
</head>
<body>
 <div class="container">
  <div class="d-flex">
    <a href="{{URL::previous()}}" class="btn btn-primary text-center btn-sm my-2 no-print">Back</a>
    <a href="javascript:void(0)" class="btn btn-success text-center btn-sm my-2 mx-3 no-print" onclick="window.print()">Print</a>
  </div>
   <div class="my-4"><h2 class="text-center">INVOICE</h2></div><hr>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
         <div class="float-right">
                <strong>Order No_: #</strong><span>{{$order->order_number}}</span>
            </div>         
        </div>    
    </div> 

     <div class="row">
       <div class="col-md-8">
           <div class="float-left">
          <img src="{{asset('images/logo.png')}}" alt="logo" width="100" height="100">
          <p>Address: {{$contpg ? $contpg->address : ""}}</p>
          <p>Email: {{$contpg ? $contpg->email : ""}}</p>
          <p>Phone: {{$contpg ? $contpg->phone : ""}}</p>
     </div>
       </div>
      <div class="col-md-4"></div>
     </div>
     
  <h2 class="text-center mt-4">Customer Details</h2>
  <p>{{$order->shipping_name}}</p>
  <p>{{$order->shipping_email}}</p>
   <p>{{$order->shipping_phone}}</p>
  <p>{{$order->shipping_address}}, {{$order->shipping_country}}</p>
  

<h4 class="text-center">Order Details</h4>
   <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>                 
                    <th>Total Price</th>                    
                </thead>
                <tbody>
                    @foreach ($order->items as $item)
                        <tr>
                        <td>{{$item->pro_name}}</td>
                        <td>{{'X '.$item->pivot->quantity}}</td>
                        <td>{{"CA$ ".number_format($item->price)}}</td>  
                         
                          <td>{{"CA$ ".number_format($item->pivot->price)}}</td>
                        </tr>  
                    @endforeach
                                                            
                </tbody>
            </table>
            <div class="my-3 col-4">
              <table class="table table-bordered">
                <tr><td class="font-weight-bold">Number Of Item</td><td>{{$order->item_count}}</td></tr>

                <tr><td class="font-weight-bold">Subtotal</td><td>{{'₦'.$order->sub_total}}</td></tr>

                @if (!is_null($order->shipping_cost))
                <tr><td class="font-weight-bold">Shipping</td><td>{{'₦'.number_format($order->shipping_cost,2)}}</td></tr>
                @endif

                @if (!is_null($order->extra_wrap) || !is_null($order->extra_bag))
                <tr><td class="font-weight-bold">Others</td><td>{{'₦'.number_format($order->others_amount,2)}}</td></tr>
                @endif

                @if (!is_null($order->discount))
                <tr><td class="font-weight-bold">Discount</td><td>{{'₦'.number_format($order->discount,2)}}</td></tr>
                @endif

                <tr><td class="font-weight-bold">TOTAL</td><td>{{'₦'.number_format($order->grand_total,2)}}</td></tr>
              </table>
                
            </div>
        </div>
 </div>


          <script src="{{ asset('ad/js/jquery.min.js') }}"></script>
           <script src="{{ asset('ad/js/jqueryprintpage.js') }}"></script>
            <script src="{{ asset('ad/js/popper.min.js') }}"></script>
              <script src="{{ asset('ad/js/bootstrap.min.js') }}"></script>
               <script src="{{ asset('ad/js/jquery.dataTables.js') }}"></script>
               <script src="{{ asset('ad/js/dataTables.bootstrap4.js') }}"></script>
              <script src="{{ asset('ad/js/scripts.js') }}"></script>
            <script src="{{ asset('ad/js/all.js') }}"></script>
             <script src="{{asset('ad/js/toastr.min.js')}}"></script>
             <script src="{{ asset('ad/js/ckeditor/ckeditor.js') }}"></script>
           <script src="{{asset('ad/js/printpage.js')}}"></script>
           <script>
            $(document).ready(function(){
             print();
            });
          </script>
</body>
</html>