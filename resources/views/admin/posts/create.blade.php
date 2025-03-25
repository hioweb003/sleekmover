@extends('layouts.admin')
@section('title')
Create Blog Post
@endsection


@section('content')
             
                 <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-8">
                        @include('includes.success')
                        @include('includes.errors') 
                      <div class="card mb-4 mt-4">
                               <div class="card-header"><i class="fas fa-table mr-1"></i>Create New Post </div>
                            <div class="card-body">      
                                <div class="form-group">
                                  <label for="title">Title</label>
                                <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Enter Post Title" value="{{old('title')}}">
                                </div>
                                
                                <div class="form-group">
                                   <label for="description">Description</label>
                                   <textarea name="post_description" id="post_description" cols="30" rows="10" class="form-control">
                                       {{old('description')}}
                                   </textarea>
                                </div>

                                <div class="form-group">
                                  <label for="featured_image">Featured Image</label>
                              <input type="file" name="featured_image" id="featured_image" class="form-control" accept=".jpg,.png,.jpeg">
                              </div>

                                <div class="row justify-content-center mt-4 mb-2">
                                  <button type="submit" class="btn btn-primary" style="align-content:center">Publish</button> 
                              </div>
                            </div> <!-- card body end-->
                        </div> <!-- card end-->
                      </div> <!-- col-md-10 end-->
                      
                </div>
           
            </form>

        
                 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('addcategory')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="cate_name" id="cate_name" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
     <script>
      CKEDITOR.replace('post_description');
      </script>
@endsection

