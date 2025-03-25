@extends('layouts.admin')
@section('title')
    Orders Details
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Orders Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.order.index')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="row">
                                            <div class="col-md-5">
                                                <p>Order Number: {{$order->order_number}}</p>
                                                <p>Number Of Items: {{$order->item_count}}</p>
                                                 <p>Order Status: {{$order->status}}</p>
                                                 <p>Store: SleekMovers</p>
                                                <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr><td>Name</td><td>{{$order->shipping_name}}</td></tr>
                                                        <tr><td>Email</td><td>{{$order->shipping_email}}</td></tr> 
                                                        <tr><td>Address</td><td>{{$order->shipping_address}}</td></tr>  
                                                        <tr><td>Phone</td><td>{{$order->shipping_phone}}</td></tr>  
                                                        <tr><td>Region</td><td>{{$order->shipping_state}}, {{$order->shipping_country}}</td></tr>  
                                                        <tr><td>Payment Method</td><td>{{ucwords($order->payment_method)}} 
                                                            @if($order->payment_method == "bank transfer")
                                                            <a href="{{asset($order->recipt_photo)}}" class="float-right" target="_blank">View Receipt</a>
                                                            @endif 
                                                            </td></tr>             
                                                        {{--<tr><td>Shipping Type</td><td>{{$orders->shipping_method}}</td></tr> --}}
                                                        <tr><td>Payment</td><td>
                                                        @if ($order->is_paid)
                                                            Paid 
                                                        @else
                                                            No Payment Yet
                                                        @endif     
                                                        
                                                        </td></tr> 
                                                        @if (!is_null($order->note))
                                                             <tr><td>Note</td><td><p>{{$order->note}}</p></td></tr>
                                                        @endif
                                                       
                                                    </tbody>
                                                </table>
                                        </div>
                                            </div>
                                    <div class="col-md-7">
                                        
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Items Details</div>
                                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->items as $item)
                                              <tr>
                                                <td><img src="{{asset($item->image)}}" alt="" width="50"></td>
                                              <td><a href="{{route('admin.getimg',['img' => $item->pro_name])}}" class="text-dark" id="showproimg" title="Click to view product image">{{ucwords($item->pro_name)}}
                                             
                                            </a></td>
                                              <td>{{"X".$item->pivot->quantity}}</td>
                                              <td>{{"CA$ ".number_format($item->price)}}</td>
                                             
                                              <td>
                                               {{"CA$ ".number_format($item->pivot->price)}}
                                              </td>
                                                </tr> 
                                            @endforeach
                                            <tr>
                                                <td colspan="5" align="right"><strong>Subtotal</strong>: &nbsp;{{!is_null($order->sub_total) ? 'CA$ '.$order->sub_total  : "CA$ 0.00"}}</td>
                                             </tr>
                                             
                                           

                                            {{--<tr>
                                                <td colspan="5" align="right"><strong>Shipping</strong>: &nbsp;{{!is_null($order->shipping_cost) ? '₦'.number_format($order->shipping_cost,2)  : "$0.00"}}</td>
                                             </tr>
                                            <tr>
                                             <td colspan="5" align="right"><strong>Discount({{$order->discount_type}})</strong>: 
                                              &nbsp;{{!is_null($order->discount) ? '₦'.number_format($order->discount,2)  : "₦0.00"}}
                                            </td> --}}
                                            </tr>
                                            <tr>
                                            <td colspan="5" align="right"><strong>Total</strong>: &nbsp;{{'CA$ '.number_format($order->grand_total,2)}}</td>
                                          </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            <p class="text-center my-5"><a href="{{Route('admin.prntpg',['id' => $order->id])}}" class="btn btn-outline-info printbtn">Print Order</a></p> 
                             </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $(".printbtn").printPage();
    });
</script>
@endsection
