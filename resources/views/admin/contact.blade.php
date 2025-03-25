@extends('layouts.admin')
@section('title')
Contact
@endsection

@section('content')
     <div class="card my-4">
         <div class="card-header"><h4>Contact Details</h4></div>
         <div class="card-body">
            @include('includes.success')
            @include('includes.errors')  
            <div class="col-md-8">  
              <form action="{{route('contact.save')}}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="container">
                 
                       <div class="form-group">
                           <label for="content">Email</label>
                          <input type="text" name="email" id="email" class="form-control col-7" placeholder="Enter company Emails" value="{{$cont ? $cont->email : old('email')}}">
                      </div>
                       <div class="form-group">
                           <label for="content">Phone No</label>
                          <input type="text" name="phone" id="phone" class="form-control col-7" placeholder="Enter company Phone No" value="{{$cont ? $cont->phone :old('phone')}}">
                      </div>
                       <div class="form-group">
                           <label for="content"> Address</label>
                          <input type="text" name="address" id="address" class="form-control col-7" placeholder="Enter company Address" value="{{$cont ? $cont->address :old('phone')}}">
                      </div>
                      <div class="form-group">
                           <label for="content">Map Location</label>
                          <input type="text" name="location" id="location" class="form-control col-7" placeholder="Enter company Map Location" value="{{$cont ? $cont->location :old('phone')}}">
                      </div>
                      <div class="form-group">
                          <input type="submit" name="savecontact" id="savecontact" class="btn btn-primary"  value="Save Contact">
                      </div>
              </div>
                  </form>
        </div>
         </div>
     </div>
@endsection


