@extends('layouts.admin')
@section('title')
Consultations
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Consultations </div>
            @include('includes.success')
            @include('includes.errors')            
            <div class="card-body">
                <form action="{{route('consultfee')}}" method="post" id="confee">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="consultationfee" placeholder="consultation Fee" aria-label="Sizing example input" value="{{$confeee ? $confeee->content : 0}}" aria-describedby="inputGroup-sizing-default">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="cursor: pointer" onclick="document.getElementById('confee').submit()" id="inputGroup-sizing-default">Save Consultation Fee</span>
                                  </div>  
                            </div>
                              
                        </div>
                    </div>
                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="posts">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Service Of Interest</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($constls as $con)
                                                   <tr>
                                            <td>{{ucwords($con->name)}}<br>
                                            <span><a href="{{route('view.consultation',['id' => $con->id])}}" class="text-info">View</a> | <a href="{{route('delete.consultation',['id' => $con->id])}}" onclick = "return confirm('Are you sure you want to trash this record');" class="text-danger">Trash</a></span>
                                            </td>
                                        <td>{{$con->email}}</td>
                                        <td>{{$con->service}}</td>
                                        <td>
                                            <span class="badge badge-{{$con->status == 0 ? 'danger' : 'secondary'}}">{{$con->status == 0 ? 'New' : 'Seen'}}</span>
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
       $("#posts").DataTable();
    });
</script>
@endsection
