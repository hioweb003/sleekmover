@extends('layouts.admin')
@section('title')
    Create User
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create New Account </div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.success')
                                    @include('includes.errors')
                            <form action="{{route('newuser.store')}}" method="post">
                                @csrf
                                
                                      <div class="form-group">
                                 <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required value="{{old('username')}}">
                                     </div> 
                                      <div class="form-group">
                                 <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                                     </div> 
                                       <div class="form-group">
                                 <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Password Comfirmation" required class="form-control">
                                     </div> 
                                                                          
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Create User</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection

