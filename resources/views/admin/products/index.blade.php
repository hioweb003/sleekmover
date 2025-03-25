@extends('layouts.admin')
@section('title')
    Products
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Products  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('product.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                @include('includes.success')
                                <div class="table-responsive">
                                 
                                    <table class="table table-bordered table-sm" id="products">
                                        <thead>
                                            <tr>
                                                <th>#</th> 
                                                <th>Image</th> 
                                                <th>Product</th>
                                                <th>Slug</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Qty Sold</th>
                                                <th>Created on</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <?php $i=0;?>
                                        @foreach ($products as $item)
                                                <tr>
                                                     <td>{{$i+1}}</td>
                                                     <td><img src="{{asset($item->image)}}" width="60px" height="60px" alt="image"></td> 
                                                <td>{{$item->pro_name}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{str_replace('-',' ',ucwords($item->category))}}</td>
                                             <td>{{'CA$ '.number_format($item->price,2)}}</td>
                                             
                                              <td>{{$item->quantity}}</td>
                                            <td>{{$item->sold}}</td>
                                            <td>{{date("d-m-Y H:ia",strtotime($item->created_at))}}</td>
                                            <td>
                                            <a href="{{route('product.edit',["id" => $item->id ])}}" class="text-info" title="Edit Product"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('product.delete',["id" => $item->id ])}}" onclick = "return confirm('Are you sure you want to trash this product');" class="text-danger" title="Delete Product"><i class="fas fa-trash"></i></a>  
                                            </td>                                          
                                            </tr>
                                              <?php $i++;?>
                                        @endforeach
                                    
                                        </tbody>
                                    </table>
                                 
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
       $("#products").DataTable();
    });
</script>
@endsection
