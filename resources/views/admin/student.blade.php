@extends('layouts.admin')
@section('title')
    Students
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Students </div>
            @include('includes.success')
            @include('includes.errors')  
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Date Registered</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($students as $student)
                                                
                                                 <tr>
                                            <td>{{ucwords($student->last_name." ".$student->first_name)}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>@if ($student->status == '1')
                                                <span class="badge badge-secondary">seen</span>
                                            @else
                                            <span class="badge badge-danger">New</span>
                                            @endif</td>
                                            <td>{{date("d M, Y",strtotime($student->created_at))}}</td>
                                            <td>
                                                <span><a href="{{route('student.show',['id' => $student->id])}}" class="btn btn-sm btn-info">View</a> </span>
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
