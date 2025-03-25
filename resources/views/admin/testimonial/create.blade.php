@extends('layouts.admin')
@section('title')
    Testimonial
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Testimonial </div>
                            <div class="card-body">
                                <div class="col-md-7">
                                    @include('includes.success')
                                    @include('includes.errors')  
                            <form action="{{route('tes.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group">
                                 <input type="text" name="title" id="caption" class="form-control" placeholder="Enter Client Name" value="{{old('title')}}" autofocus>
                                     </div> 
                                      <div class="form-group">
                                          <input type="file" name="clientimage" id="clientimage" class="form-control" accept=".jpg,.png,.jpeg">
                                     </div> 

                                     <div class="form-group">
                                     <textarea name="message" class="form-control" id="" cols="30" rows="10">{{old('message')}}</textarea>
                                    </div> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Add New</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection

