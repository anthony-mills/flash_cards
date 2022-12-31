@if (session('status'))
    <div class="alert alert-success" role="alert">
        {!! session('status') . \Session::forget('status')  !!}
    </div>
@endif

@if (session('errors'))
    <div class="alert alert-danger" role="alert">
        {!! session('errors') . \Session::forget('errors')  !!}
    </div>
@endif
