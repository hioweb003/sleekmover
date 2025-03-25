 @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" id="alert">
        <strong>{{session()->get('success')}}</strong>
    </div> 
@endif

