@extends('layouts.admin')
@section('title')
    Testimonial
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Testimonial  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('tes.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
            @include('includes.success')
            @include('includes.errors')               
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="slidestes">
                                        <thead>
                                            <tr>
                                                <th>Title</th>                                               
                                                <th>Image</th>

                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($tes as $slide)
                                                   <tr>
                                            <td>{{$slide->clientname}}<br>
                                            <span> <a href="{{route('tes.edit',['id' => $slide->id])}}" class="text-info">Edit</a> | <a href="{{route('tes.delete',['id' => $slide->id])}}" onclick = "return confirm('Are you sure you want to trash this record');" class="text-danger">Trash</a></span>
                                            </td>
                                       
                                        <td><img src="{{asset($slide->clientimage)}}" alt="No image" width="90px" height="50px"></td>
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
       $("#slidestes").DataTable();
    });
</script>
@endsection
