@extends('layouts.admin')
@section('title')
    Category
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Category </div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.success')
                                    @include('includes.errors')   
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                 <div class="form-group">
                                 <input type="text" name="cate_name" id="cate_name" class="form-control" value="{{old('cate_name')}}" autofocus>
                                     </div> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Add New</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection

