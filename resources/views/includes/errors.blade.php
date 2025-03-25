@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" id="alert">
     <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
     </ul>
    </div>
@endif

    
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible" id="alert">
    <strong>{{session()->get('error')}}</strong>
</div>
    
@endif
   