@extends('layouts.admin')
@section('title')
Terms and condition
@endsection

@section('content')
    <div class="card my-4">
         <div class="card-header"> <h4>Terms and condition</h4></div>
         <div class="card-body">
            @include('includes.success')
            @include('includes.errors')
            <div class="col-md-12">
                
                <form action="{{route('trmssave')}}" method="post">
                    @csrf
                             <div class="container">
                           
                            <div class="form-group">
                            
                            <textarea name="content" id="content" cols="30" rows="10">@if($trm ?? ""){!!$trm->content!!}@endif</textarea>
                            </div>
        
                             <div class="form-group">
                                <input type="submit" name="saveterm" id="savepterm" class="btn btn-primary"  value="Save Term">
                            </div>                         
          </form>
        </div>    
    </div> 
@endsection
@section('script')
     <script>
      CKEDITOR.replace('content');
      </script>
@endsection
