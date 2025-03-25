@extends('layouts.admin')
@section('title')
    Faq
@endsection
@section('content')

<div class="card mb-4 mt-4">
  <div class="card-header">
    <h1 class="h2">Faq   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" onclick="modfaq()" class="btn btn-outline-info btn-sm">Add New</a></h1>
  </div>
        <div class="card-body">
          @include('includes.success')
          @include('includes.errors') 
<div class="table-responsive">
            @if (count($faqlist)>0)
        <table class="table table-striped table-sm" id="faqs">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>body</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             <?php $i = 0;
           
            ?>
            @foreach ($faqlist as $item)
                <tr>
            <td>{{$i+1}}</td>
                <td>{{$item->name}}</td>
                <td>{!!Str::limit($item->body,'40','...') !!}</td>
               
              <td>
               <a class="btn btn-info btn-sm" href="{{route('faq.edit',['id' => $item->id])}}" title="edit"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger btn-sm" href="{{route('faq.delete',['id' => $item->id])}}" onclick="return confirm('Are you sure you want to delete this Record')" title="delete"><i class="fas fa-trash"></i></a>
  </td>
            </tr>
            <?php  $i++ ?>
            @endforeach          
          </tbody>
        </table>
           @else
       <div class="alert alert-info">No Data Found</div>
       @endif
      </div>
        </div>
    </div>


 <div class="modal fade" id="watwe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('admin.addquest')}}" method="post">
                @csrf
                                
                <div class="form-group">
                <input type="text" name="name" id="password" class="form-control" placeholder="Enter Question Title" required autofocus value="{{old('name')}}">
                
                    </div> 
                   
                    <div class="form-group">
                    <textarea name="body" id="" cols="30" class="form-control" placeholder="Enter message" rows="10">{{old('body')}}</textarea>
                    </div>
                                         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-success">Save</button>
      </div>
        </form>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
        function modfaq(){
            $("#watwe").modal();
        }    
      CKEDITOR.replace('body');
    
     $(document).ready(function(){
       $("#faqs").DataTable();
    });
</script>
@endsection