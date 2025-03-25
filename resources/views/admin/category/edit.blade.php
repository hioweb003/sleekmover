@extends('layouts.admin')
@section('title')
    Category
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Category </div>
                           <div class="col-md-6">
                                <div class="card-body">
                                    @include('includes.success')
                                    @include('includes.errors') 
                                    <form action="{{route('category.update',['id' => $categories->id])}}" method="post">
                                @csrf
                          
                                 <div class="form-group">
                              
                                 <input type="text" name="category" id="category" class="form-control" value="{{$categories->cate_name}}">
                             
                                     </div> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Update</button>
                                 </div>                          
                            </form>
                            </div>
                           </div>
                        </div>
@endsection

