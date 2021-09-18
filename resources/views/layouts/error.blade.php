@if(count($errors))
    @foreach($errors->all() as $e)
        <p class="alert alert-danger">{{ $e }}</p>
    @endforeach
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@if(Session::has('warning'))
    <p class="alert alert-warning">{{ Session::get('warning') }}</p>
@endif

@if(Session::has('danger'))
    <p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif
