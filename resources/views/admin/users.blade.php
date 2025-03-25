@extends('layouts.admin')
@section('title')
    Users
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Admin Users  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('user.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
            @include('includes.success')
            @include('includes.errors')
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="products">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Permission</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             @foreach ($adusers as $user)
                                                 <tr>
                                            <td>{{$user->username}}<br>
                                                @if ($user->roles != 1)
                                            <span> <a href="{{route('admin.delete',['id' => $user->id])}}" onclick = "return confirm('Are you sure you want to trash this user');" class="text-danger">Trash</a></span>
                                                @endif
                                                </td>
                                            <td>
                                               @if ($user->roles)
                                            <a href="{{route('not_admin',['id' => $user->id])}}" class="btn btn-warning btn-xs">Remove Permission</a>                            
                                                @else
                                                    <a href="{{route('make_admin',['id' => $user->id])}}" class="btn btn-success btn-xs">Make Admin</a>
                                                @endif
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
       $("#products").DataTable();
    });
</script>
@endsection
