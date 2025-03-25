@extends('layouts.admin')
@section('title')
Our Commitment
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Our Commitment </div>
                            <div class="card-body">
                                <div class="col-md-8">
                                    @include('includes.success')
                                    @include('includes.errors') 
                            <form action="{{route('cul.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group">
                                 <input type="text" name="title" id="caption" class="form-control" placeholder="Enter Title" value="{{old('title')}}" autofocus>
                                     </div> 
                                     

                                     <div class="form-group">
                                     <textarea name="details" class="form-control" id="details" cols="30" rows="10">{{old('details')}}</textarea>
                                    </div>
                                     <div class="form-group">
                        <label for="images">Image</label>
                    <input type="file" name="images" id="images" class="form-control" accept=".jpg,.png,.jpeg">
                    </div>
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Add New</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
     <script>
      CKEDITOR.replace('details');
      </script>
@endsection
