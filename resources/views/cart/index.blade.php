<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        
        @include("includes.header-shop")

        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url({{ asset('images/demo-decor-store-title-bg.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">Shopping cart</h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="{{ route('shp') }}">Home</a></li> 
                            <li>Shopping cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row align-items-start">
                   @if (Cart::count() > 0)
                   <div class="col-lg-8 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <table class="table cart-products">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" class="alt-font fw-600">Product</th>
                                        <th scope="col"></th>
                                        <th scope="col" class="alt-font fw-600">Price</th>
                                        <th scope="col" class="alt-font fw-600">Quantity</th>
                                        <th scope="col" class="alt-font fw-600">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                    <tr> 
                                        <td class="product-remove">
                                            <a href="{{route('removeitem',['id' => $item->rowId])}}" class="fs-20 fw-500">×</a>
                                        </td>
                                        <td class="product-thumbnail"><a href="demo-decor-store-single-product.php"><img class="cart-product-image" src="{{asset($item->model->image)}}" alt=""></a></td>
                                        <td class="product-name">
                                            <a href="demo-decor-store-single-product.php" class="text-dark-gray fw-500 d-block lh-initial">{{$item->name}}</a> 
                                            <span class="fs-14">Color: Pink</span>
                                        </td>
                                        <td class="product-price" data-title="Price">CA$ {{number_format($item->price)}}</td>
                                        <td class="product-quantity" data-title="Quantity">
                                          <form action="{{ route('cart.update',['rowid' => $item->rowId]) }}" id="updertitme" method="post">
                                            @csrf 
                                            <div class="quantity">
                                                <button type="button" class="qty-minus">-</button> 
                                                <input class="qty-text" type="text" name="qty" value="{{$item->qty}}" aria-label="qty-text">
                                              <button type="button" class="qty-plus">+</button>
                                            </div>
                                            <input type="hidden" name="id" id="" class="form-control col-md-5 mr-2" value="{{$item->id}}">
                                            <button type="submit" class="btn apply-coupon-btn btn-sm d-block">Update Cart</button>
                                          </form>
                                        </td> 
                                        <td class="product-subtotal" data-title="Total">CA$ {{number_format($item->qty * $item->price)}}</td> 
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="row mt-20px">
                        <div class="col-xl-7 col-md-6"> 
                            <div class="coupon-code-panel">
                                <input type="text" class="bg-white border-radius-4px" placeholder="Coupon code">
                                <a href="#" class="btn apply-coupon-btn fs-13 fw-600 text-uppercase">Apply</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 text-center text-md-end sm-mt-15px">
                            <a href="#" class="btn btn-small border-1 btn-round-edge btn-transparent-light-gray text-transform-none me-15px">Empty cart</a>
                            <a href="#" class="btn btn-small border-1 btn-round-edge btn-transparent-light-gray text-transform-none">Update cart</a>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-4">
                    <div class="bg-very-light-gray border-radius-6px p-50px xl-p-30px lg-p-25px">
                        <span class="fs-26 alt-font fw-600 text-dark-gray mb-5px d-block">Cart totals</span>
                        <table class="w-100 total-price-table">
                            <tbody>
                                <tr>
                                    <th class="w-45 fw-600 text-dark-gray alt-font">Subtotal</th>
                                    <td class="text-dark-gray fw-600">CA$ {{Cart::subtotal()}}</td>
                                </tr>
                                {{-- <tr class="shipping">
                                    <th class="fw-600 text-dark-gray alt-font">Shipping</th>
                                    <td data-title="Shipping">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex align-items-center">
                                                <input id="free_shipping" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0" checked="checked">
                                                <label class="md-line-height-18px" for="free_shipping">Free shipping</label>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <input id="flat" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0">
                                                <label class="md-line-height-18px" for="flat">Flat: $12.00</label>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <input id="local_pickup" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0">
                                                <label class="md-line-height-18px" for="local_pickup">Local pickup</label>
                                            </li>
                                        </ul>
                                    </td>
                                </tr> --}}
                                
                                <tr class="total-amount">
                                    <th class="fw-600 text-dark-gray alt-font pb-0">Total</th>
                                    <td class="pb-0" data-title="Total">
                                        <p class="d-block fw-700 mb-0 text-dark-gray alt-font">CA$ {{Cart::subtotal()}}</p>
                                        {{-- <span class="fs-14">(Includes $19.29 tax)</span> --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('checkout') }}" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-25px">
                            <span>
                                <span class="btn-double-text" data-text="Proceed to checkout">Proceed to checkout</span>
                            </span>
                        </a>
                    </div>
                </div>
                   @else
                    <div class="col-md-12 text-center">
                        <h3>Your Cart is Empty</h3>
                        
                        <a href="{{route('shp')}}" class="btn btn-dark-gray">Continue Shopping</a>
                    </div>
                   @endif
                </div>
            </div>
        </section>
        <!-- end section --> 


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


        //   function updateCart(typ,uidd){
            
        //         var qty = document.getElementById('qtytxt'+uidd).value;
        //         if(typ === 'plus'){
        //             qty = parseInt(qty)+1;
        //             document.getElementById('cmdtyp'+uidd).value = "plus";
        //         }else{
        //             if(qty > 1){
        //             qty = parseInt(qty)-1;
        //             }
        //             document.getElementById('cmdtyp'+uidd).value = "minus";
        //         }
        //         document.getElementById('qtytxt'+uidd).value = qty;
            
            
        //   }
       </script>
        @endsection  

        @include("includes.footer")