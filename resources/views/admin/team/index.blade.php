@extends('layouts.admin')
@section('title')
Our Team
@endsection
@section('content')
    
      <div class="card mb-4 mt-4">
        <div class="card-header">
          <h1 class="h2">Our Team &nbsp;<a href="{{route('team.create')}}" class="btn btn-outline-info">Add New</a></h1>
        </div>
              <div class="card-body">
                @include('includes.success')
                @include('includes.errors') 
      <div class="table-responsive">
        <table class="table table-striped table-sm" id="ptos">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         @foreach ($allteams as $po)
                <tr>
                <td >{{$po->name}}</td>
                <td>{{$po->position}}</td>
                <td><img src="{{asset($po->image)}}" width="80px" height="80px" alt="{{$po->name}}"></td>
                      <td>
                        <a class="text-info" href="{{route('team.edit',['id' => $po->id])}}"  title="edit">Edit</a>
                        <a class="text-danger" href="{{route('team.delete',['id' => $po->id])}}" onclick="return confirm('Are you sure you want to delete this record')" title="delete">Delete</a>
                      </td>
            
            </tr>
         @endforeach
           
          </tbody>
        </table>
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
@endsection