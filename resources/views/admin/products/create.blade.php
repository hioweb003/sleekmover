@extends('layouts.admin')
@section('title')
    Products
@endsection


@section('content')
   
         <div class="card">
                <div class="card-header">
                    Create Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('product.index')}}" class="btn btn-outline-info btn-sm">Back</a>
                </div>
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
     @csrf
     @include('includes.errors')
 
      
         <div class="card-body">
                <div class="row">
                  <!-- col-md-8 start-->
                   <div class="col-md-7 mb-4">

            <input type="hidden" name="admin_id" id="admin_id" class="form-control" value="{{Auth::user()->id}}">
            <input type="hidden" name="type" id="vg" class="form-control" value="admin">
                            <div class="form-group">
                        <label for="pro_name">Product Name</label>
                    <input type="text" name="pro_name" id="pro_name" class="form-control" required value="{{old('pro_name')}}" autofocus>
                    </div>
                   
                        <div class="form-group">
                        <label for="price">Price</label>
                    <input type="text" name="regular_price" id="regular_price" class="form-control" placeholder="3000" required value="{{old('regular_price')}}">
                    </div>

                    <div class="form-group">
                      <label for="category">Category</label>
                          <select class="form-control" name="category" required id="category">
                              <option selected disabled>Select...</option>
                              @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ucwords($item->cate_name)}}</option>
                              @endforeach
                          </select>
                      </div> 

                     <div class="form-group">
                        <label for="quantity">Total Quantity in Stock</label>
                    <input type="text" name="quantity" id="quantity" class="form-control" placeholder="30" required value="{{old('quantity')}}">
                    </div>

                    <div class="form-group">
                      <label for="featured_image">Image</label><br>
                      <img src="" class="passimg" style="display: none" width="60px" height="60px">
                  <input type="file" name="featured_image"  required class="form-control pfeatured_image" accept=".jpg,.png,.jpeg">
                  </div> 

                  <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea name="description" id="description" class="form-control" required cols="30" rows="10">
                        {{old('description')}}
                        </textarea>
                </div>

                  <button type="submit" class="btn btn-success mx-1">Create</button>
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


                                        
                                           


                                             