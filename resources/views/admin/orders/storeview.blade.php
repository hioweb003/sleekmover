@extends('layouts.admin')
@section('title')
    Store Details
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Store Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                 <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr><td>Store Name</td><td>{{$storedetails->store_name}}</td></tr>
                                                        <tr><td>Store Email</td><td>{{$storedetails->email}}</td></tr> 
                                                        <tr><td>Address</td><td><a href="https://www.google.com/maps/place/{{$storedetails->storeprofile->address}}" target="_blank" title="Click to view on map">{{$storedetails->storeprofile->address}}</a></td></tr>  
                                                        <tr><td>Phone</td><td>{{$storedetails->storeprofile->phone}}</td></tr>  
                                                         <tr><td>Bank</td><td>{{$storedetails->storeprofile->bank}}</td></tr> 
                                                        <tr><td>Account Name</td><td>{{$storedetails->storeprofile->account_name}}</td></tr>  
                                                        <tr><td>Account No</td><td>{{$storedetails->storeprofile->account_no}}</td></tr>  
                                                    </tbody>
                                                </table>

                                </div>

                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $(".printbtn").printPage();
    });
</script>
@endsection
