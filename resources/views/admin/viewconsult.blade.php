@extends('layouts.admin')
@section('title')
    Consultation Details
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Consultation Details</div>
             
            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="category">
                                       
                                        <tbody>
                                        <tr><td>Name</td> <td>{{ucwords($consl->name)}}</td></tr>
                                            <tr><td>Email</td><td>{{$consl->email}}</td></tr>
                                          <tr><td>Service Of Interest</td>  <td>{{$consl->service}}</td></tr>
                                          {{-- <tr><td>Consultation Fee</td>  <td>{{$consl->payment_status == 1 ? 'Paid' : 'Pending'}}</td></tr> --}}
                                          <tr><td>Time</td>  <td>{{date("h:i a",strtotime($consl->consult_time))}}</td></tr>
                                           <tr><td>Date</td><td>{{date("d M, Y",strtotime($consl->consult_date))}}</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <textarea class="form-control" cols="10" rows="5">{{$consl->comment}}</textarea>
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
