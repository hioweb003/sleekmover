@extends('layouts.admin')
@section('title')
   Our Commitment
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Our Commitment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('cul.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
            @include('includes.success')
            @include('includes.errors')                
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="slidesser">
                                        <thead>
                                            <tr>
                                                <th>Caption</th>                                               
                                                <th>Details</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($sers as $slide)
                                                   <tr>
                                            <td>{{$slide->title}}<br>
                        <span><a href="{{route('cul.edit',['id' => $slide->id])}}" class="text-info">Edit</a> | <a href="{{route('cul.delete',['id' => $slide->id])}}" onclick = "return confirm('Are you sure you want to trash this record');" class="text-danger">Trash</a></span>
                                            </td>
                                       
                                        <td>{!! Str::limit($slide->details, '60', '...') !!}</td>
                                        <td><img src="{{asset($slide->images)}}" width="60px" height="60px"></td>
                                            </tr>  
                                          
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

  <div class="modal fade" id="dmodalid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title title">Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="getdetails"></div>   
    </div>
   
  </div>
</div>
</div>
@endsection
@section('script')
<script>
    function shwd(details){  
        $("#dmodalid").modal("show");
        $("#getdetails").html(details);
    }
</script>
    <script>
    $(document).ready(function(){
       $("#slidesser").DataTable();
    });
</script>

@endsection
