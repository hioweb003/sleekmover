@extends('layouts.admin')
@section('title')
    All Qoute Request
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>All Qoute Request </div>
                       @include('includes.success')
                                   @include('includes.errors')  
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category6">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                 <th>Email</th>
                                                 <th>Status</th>
                                                  <th>Created Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                                <?php $i=0;?>
                                            @foreach ($qut as $parcel)
                                                
                                                 <tr>
                                                 <td>{{$i+1}}</td>
                                            <td>{{$parcel->name}} </td>
                                            <td>{{$parcel->phone}} </td>
                                             <td>{{$parcel->email}} </td>
                                             <td><span class="badge badge-{{ $parcel->status == 'pending' ? 'danger' : 'secondary' }}">{{$parcel->status == 'pending' ? 'new' : 'seen'}}</span></td>
                                             <td>{{date("d M, Y H:ia",strtotime($parcel->created_at))}}</td>
                                             
                                                <td>
                                                                          <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              More
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('admin.roshowquote',['id' => $parcel->id])}}">details</a>
                                 {{-- <a class="dropdown-item roprtqutparcel" href="{{route('roquote.print',['id' => $parcel->id])}}">Print Invoice</a>   --}}
                            {{--<a class="dropdown-item" href="{{route('qute.history',['qutid' => $parcel->tracking,'id' => $parcel->id])}}" >History</a> --}}                       
                             
                                @if (Auth::user()->roles == 1)
                               <a class="dropdown-item text-danger" href="{{route('roquote.delete',['id' => $parcel->id])}}" onclick="return confirm('Are you sure you want to delete this record');">Delete</a>
                                @endif
                            </div>
                          </div>
                                                </td>
                                            </tr> 
                                            <?php $i++;?>
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
       $("#category6").DataTable();

       $(".roprtqutparcel").printPage();
    });
</script>
@endsection
