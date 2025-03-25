@extends('layouts.admin')
@section('title')
Edit Post
@endsection


@section('content')
              
                 <form action="{{route('post.update',['id' => $post->id])}}" method="post" enctype="multipart/form-data">
                @csrf
             
                <div class="row">
                      <div class="col-md-10">     
                        @include('includes.success')
            @include('includes.errors')    
                      <div class="card mb-4 mt-4">
                               <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Post </div>
                            <div class="card-body">      
                                <div class="form-group">
                                  <label for="title">Title</label>
                                <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Enter Post Title" value="{{$post->post_title}}">
                                </div>
                                
                                <div class="form-group">
                                   <label for="description">Description</label>
                                   <textarea name="post_description" id="post_description" cols="30" rows="10" class="form-control">
                                       {{$post->post_description}}
                                   </textarea>
                                </div>

                                <div class="form-group">
                                  <label for="featured_image">Featured Image</label>
                              <input type="file" name="featured_image" id="featured_image" class="form-control" accept=".jpg,.png,.jpeg">
                              </div>

                              <div class="row justify-content-center mt-4 mb-2">
                                <button type="submit" class="btn btn-primary" style="align-content:center">Update</button> 
                            </div>
                            </div> <!-- card body end-->
                        </div> <!-- card end-->
                      </div> <!-- col-md-10 end-->
                      
                </div>
           
            </form>

@endsection
@section('script')
     <script>
      CKEDITOR.replace('post_description');
      </script>
@endsection

