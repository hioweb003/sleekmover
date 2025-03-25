@extends('layouts.admin')
@section('title')
Message
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>{{$cdet->subject}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('contact.mail')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                 @include('includes.errors') 
                                  @include('includes.success') 
                              <div class="row">
                                  <div class="col-md-7">
                                    <ul class="list-unstyled">
                                    <li><b>From:</b> {{$cdet->name}} - {{$cdet->email}}</li>
                                      <li><b>Subject:</b> {{$cdet->subject}}</li>
                                      <li><b>Phone Number:</b> {{$cdet->phone}}</li><br>
                                    <li><button type="button" class="btn btn-primary btn-sm showmail"><i class="fas fa-reply"></i> Reply</button></li>
                                    </ul>
                                    <div class="border p-3">
                                    <p>{{$cdet->message}}</p>
                                    </div>
                                  </div>
                                    <div class="col-md-5">                               
                                      <div id="mail" style="display:none">
                                          <form action="{{route('email.send')}}" method="post">
                                @csrf 
                                          <p><b>To :</b> {{$cdet->email}}</p>
                                    <input type="hidden" name="name" id="caption" class="form-control" placeholder="Enter Title" value="{{$cdet->name}}">
                                    <input type="hidden" name="subject" id="caption" class="form-control" placeholder="Enter Title" value="{{$cdet->subject}}">
                                     <input type="hidden" name="email" id="caption" class="form-control" placeholder="Enter Title" value="{{$cdet->email}}">
                                     <div class="form-group">
                                     <textarea name="message" class="form-control" id="message" cols="30" rows="10">{{old('message')}}</textarea>
                                    </div> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Send</button>
                                 </div>                          
                            </form>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </div>
@endsection
@section('script')
     <script>
      CKEDITOR.replace('message');
      </script>
      <script>
          $(document).ready(function(){
             $(".showmail").click(function(){
               $("#mail").show();
             });
          });
      </script>
@endsection
