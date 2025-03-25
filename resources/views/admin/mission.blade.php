@extends('layouts.admin')
@section('title')
    Our Mission
@endsection

@section('content')
    <div class="card my-4">
         <div class="card-header"> <h4>Our Mission</h4></div>
         <div class="card-body">
            @include('includes.success')
            @include('includes.errors')  
            <div class="col-md-12">
                
                <form action="{{route('mission.save')}}" method="post">
                    @csrf
                             <div class="container">
                           
                            <div class="form-group">
                            
                            <textarea name="content" id="content" cols="30" rows="10">@if($mis ?? ""){!!$mis->content!!}@endif</textarea>
                            </div>
        
                             <div class="form-group">
                                <input type="submit" name="savemission" id="savemission" class="btn btn-primary"  value="Save Mission">
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
