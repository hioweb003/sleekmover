@extends('layouts.admin')
@section('title')
    Broadcast message
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Send Broadcast Message </div>
                            <div class="card-body">
                                <div class="col-md-6">
                                    @include('includes.success')
                                    @include('includes.errors')
                            <form action="{{route('send.msg')}}" method="post">
                                @csrf 
                                @foreach ($allemail as $mail)
                            <input type="hidden" name="email[]" id="email" class="form-control" value="{{$mail->email}}">     
                                @endforeach
                                        <div class="form-group">
                                          <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">     
                                        </div>                          
                                       <div class="form-group">
                                           <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                     </div> 
                                                                          
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Send Message</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection

@section('script')
     <script>
      CKEDITOR.replace('message');
      </script>

@endsection