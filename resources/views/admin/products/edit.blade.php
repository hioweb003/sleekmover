@extends('layouts.admin')
@section('title')
    Products
@endsection


@section('content')
   
        
      @include('includes.errors')

        <form action="{{route('product.update',['id' => $editpro->id])}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
     <div class="row">
                  <!-- col-md-8 start-->
        <div class="col-md-8 mb-4">
          <div class="card">
                <div class="card-header">
                    Edit Product  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('product.index')}}" class="btn btn-outline-info btn-sm">Back</a>
                </div>
              <div class="card-body">
                         @include('includes.errors')

            <input type="hidden" name="admin_id" id="admin_id" class="form-control" value="{{$editpro->admin_id}}">
            <input type="hidden" name="uredirct" class="form-control" value="{{route('product.index')}}">
                            <div class="form-group">
                        <label for="pro_name">Product Name</label>
                            <input type="text" name="pro_name" id="pro_name" class="form-control" value="{{$editpro->pro_name}}">
                    </div>
                           
                    <div class="form-group">
                      <label for="category">Category</label>
                          <select class="form-control" name="category" required id="category">
                              <option selected disabled>Select...</option>
                              @foreach ($categories as $item)
                              <option value="{{ $item->id }}" {{$editpro->category_id == $item->id ? 'selected' : ''}} >{{ucwords($item->cate_name)}}</option>
                            @endforeach
                          </select>
                      </div> 
                   
                        <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="regular_price" id="regular_price" class="form-control" placeholder="5000" value="{{$editpro->price}}">
                    </div>

                
                        <div class="form-group">
                        <label for="quantity">Quantity in Stock</label>
                     <input type="text" name="quantity" id="quantity" class="form-control" placeholder="20" value="{{$editpro->quantity}}">
                    </div>

                   
                    <div class="form-group">
                      <label for="featured_image">Image</label>
                        <div><img src="{{asset($editpro->image)}}" width="60px" height="50px" alt=""></div>
                        <img src="" class="passimg" style="display: none" width="60px" height="50px">
                            <input type="file" name="featured_image"  class="form-control pfeatured_image" accept=".jpg,.png,.jpeg,.webp">
                        </div>

                        <div class="form-group">
                          <label for="description">Product Description</label>
                          <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                              {{$editpro->description}}
                              </textarea>
                      </div>
                    
                      <button type="submit" class="btn btn-success mx-1">Update</button>

                 </div><!--card-body end-->
           </div><!-- card end-->
       </div>  <!-- col-md-8 end-->
        
</form>
     </div>

    
@endsection

@section('script')
     <script>
      CKEDITOR.replace('description');
      CKEDITOR.replace('pro_details');
      </script>
       <script>
       $(document).ready(function(){
 
          $("#spoff").click(function(){
            if(this.checked){
              $("#shwtimerdate").show();
            }else{
              $("#shwtimerdate").hide();
            }
        });
       
      });
    </script>
@endsection


                                        
                                           


                                             