@extends('layouts.admin')
@section('title')
    Category
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Category  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('category.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
            @include('includes.success')
            @include('includes.errors')  
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category">
                                        <thead>
                                            <tr>
                                                <th>category Name</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($categories as $category)
                                                
                                                 <tr>
                                            <td>{{$category->cate_name}} <br>
                                            <span><a href="{{route('category.edit',['id' => $category->id])}}" class="text-info">Edit</a> | <a href="{{route('category.delete',['id' => $category->id])}}" onclick = "return confirm('Are you sure you want to trash this category');" class="text-danger">Trash</a></span>
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
       $("#category").DataTable();
    });
</script>
@endsection
