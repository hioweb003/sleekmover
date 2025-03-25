@extends('layouts.admin')
@section('title')
Our Commitment
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Our Commitment</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        @include('includes.success')
                    @include('includes.errors')  
                            <form action="{{route('cul.update',['id' => $edser->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                               <div class="form-group">
                                 <input type="text" name="title" id="caption" class="form-control" placeholder="Enter Title" value="{{$edser->title}}" autofocus>
                                     </div> 
                                      

                                     <div class="form-group">
                                     <textarea name="details" id="details" cols="30" rows="10">{!!$edser->details!!}</textarea>
                                    </div>
                            <div class="form-group">
                        <label for="images">Image</label>
                    <input type="file" name="images" id="images" class="form-control" accept=".jpg,.png,.jpeg">
                    </div>
                        <div class="my-3">
                            <img src="{{asset($edser->images)}}" width="80" height="80" alt="">
                        </div>
                                    <div class="form-group">
                                         <button type="submit" class="btn btn-success">Update</button>
                                 </div>                         
                            </form>
                            
                                </div>
                               
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
     <script>
      CKEDITOR.replace('details');
      </script>
@endsection
