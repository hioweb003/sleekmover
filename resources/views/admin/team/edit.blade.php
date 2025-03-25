@extends('layouts.admin')
@section('title')
    Team
@endsection
@section('content')
    
      <div class="card mb-4 mt-4">
        <div class="card-header">
          <h1 class="h2">Team </h1>
        </div>
              <div class="card-body">
                <div class="col-md-8">
                @include('includes.success')
                @include('includes.errors') 
                <form action="{{route('team.update',['id' => $edt->id])}}" method="post" enctype="multipart/form-data">
                    @csrf        
                    <div class="form-group">
                        <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required autofocus value="{{$edt->name}}">
                        </div>

                        <div class="form-group">
                          <input type="text" name="position" id="adnpoe" class="form-control" placeholder="Enter Position"  value="{{$edt->position}}">
                              </div>

                              <div class="form-group">
                                <input type="text" name="facebook" id="" class="form-control" placeholder="Enter Facebook Address" value="{{$edt->facebook}}">
                                    </div>
                            <div class="form-group">
                                <input type="text" name="twitter" id="" class="form-control" placeholder="Enter Twitter Address" value="{{$edt->twitter}}">
                                    </div>
                            <div class="form-group">
                                <input type="text" name="linkedin" id="" class="form-control" placeholder="Enter Linkedin Address" value="{{$edt->linkedin}}">
                                    </div>
                            <div class="form-group">
                                <input type="email" name="email" id="" class="form-control" placeholder="Enter Email" value="{{$edt->email}}">
                                    </div>
      
                                    
                              <div class="form-group">
                                  <label for="">Add Image</label>
                                  <input type="file" name="file" id="screenshot" class="form-control" placeholder="">
                             </div>
                              <div class="form-group">
                                  <label for="">Details</label>
                                <textarea name="details" id="details" cols="30" rows="10">{{$edt->details}}</textarea>
                             </div>
                             <div class="form-group">
                               <button type="submit" class="btn btn-success">Update Record</button>
                            </div>
                              </form>
                          </div>
                        </div>
                      </div>
@endsection

@section('script')
    <script>
    $(document).ready(function(){
       $("#ptos").DataTable();
    });
    function editpto(id,c){
        $("#uppts").modal("show");
        $("#name").val($(".ptn"+id).text());
        $("#url").val($(".ptu"+id).text());
        $("#ptoid").val(id);
        
        var y = document.getElementById("cst");
        for(var i= 0; i < y.length; i++){
            if(y.options[i].value == c){
               y.options[i].selected = true; 
            }
        }
    }
</script>
<script>
  CKEDITOR.replace('details');
  </script>
@endsection