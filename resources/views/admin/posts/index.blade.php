@extends('layouts.admin')
@section('title')
Post
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Post  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('post.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
            @include('includes.success')
            @include('includes.errors')            
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="posts">
                                        <thead>
                                            <tr>
                                                <th>title</th>
                                                <th>Image</th>
                                                <th>Views</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($posts as $post)
                                                   <tr>
                                            <td>{{$post->post_title}}<br>
                                            <span><a href="{{route('post.edit',['id' => $post->id])}}" class="text-info">Edit</a> | <a href="{{route('post.delete',['id' => $post->id])}}" onclick = "return confirm('Are you sure you want to trash this post');" class="text-danger">Trash</a></span>
                                            </td>
                                        <td><img src="{{asset($post->featured_image)}}" width="60" height="60" alt="{{$post->post_title}}"/></td>
                                        <td>{{$post->views}}</td>
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
       $("#posts").DataTable();
    });
</script>
@endsection
