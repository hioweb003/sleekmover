@extends('layouts.admin')
@section('title')
   Edit Testimonial
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Testimonial</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        @include('includes.success')
                                        @include('includes.errors') 
                            <form action="{{route('tes.update',['id' => $edtes->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                               <div class="form-group">
                                 <input type="text" name="title" id="caption" class="form-control" placeholder="Enter Client Name" value="{{$edtes->clientname}}" autofocus>
                                     </div> 
                                      <div class="form-group">
                                          <input type="file" name="clientimage" id="clientimage" class="form-control" accept=".jpg,.png,.jpeg">
                                     </div> 

                                     <div class="form-group">
                                     <textarea name="message" class="form-control" id="" cols="30" rows="10">{{$edtes->message}}</textarea>
                                    </div> 
                                      <div class="form-group">
                                         <button type="submit" class="btn btn-success">Update</button>
                                 </div>                          
                            </form>
                            
                                </div>
                                <div class="col-md-7">
                                        <img src="{{asset($edtes->clientimage)}}" width="300px" height="200px" alt="">
                                </div>
                                </div>
                            </div>
                        </div>
@endsection

