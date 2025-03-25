@extends('layouts.admin')
@section('title')
   Quote Request Details
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Details  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.roquote')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                      
            <div class="card-body">                 
                                     
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category2">
                                    
                                        <tbody> 
                                       <h4 class="my-3">Quote Information</h4><hr>
                                         <tr><td>Name </td><td>{{ucwords($shqut->name)}}</td></tr>
                                        <tr><td>Email </td><td>{{$shqut->email}}</td></tr>
                                        <tr><td>Phone </td><td>{{$shqut->phone}}</td></tr>   
                                        <tr><td>Address From</td><td>{{$shqut->address_from}}</td></tr> 
                                        <tr><td>Address To</td><td>{{$shqut->address_to}}</td></tr> 
                                        <tr><td>Date Of Movement </td><td>{{date('d M Y',strtotime($shqut->moving_date))}}</td></tr>
                                         <tr><td>Type of Service </td><td>{{$shqut->service}}</td></tr>
                                        </tbody>
                                
                                    </table>
                                </div>
                                @if (!is_null($shqut->note))
                                <p>Note</p>
                                    <p>
                                        {{$shqut->note}}
                                    </p>
                                @endif
                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
   
    });
</script>

@endsection
