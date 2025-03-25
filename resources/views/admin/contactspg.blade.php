@extends('layouts.admin')
@section('title')
    Contact
@endsection


@section('content')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Messages </div>
              @include('includes.success')
                                   @include('includes.errors')
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="cont">
                                        <thead>
                                            <tr>
                                                <th>All Messages</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             @foreach ($cons as $c)
                                                 <tr>
                                                 <td><a href="{{route('cmsg',['id' => $c->id])}}" class="{{$c->status ? 'text-info' : 'text-dark'}}">{{$c->name}} <br>{{$c->subject}}</a></td>
                                            
                                            <td>
                                            <span> <a href="{{route('email.delete',['id' => $c->id])}}" onclick = "return confirm('Are you sure you want to trash this message');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></span>                                     
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
       $("#cont").DataTable();
    });
</script>
@endsection
