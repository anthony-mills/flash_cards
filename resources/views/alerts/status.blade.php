@if (session('status'))
    <div class="alert alert-success" role="alert">
        {!! session('status') . \Session::forget('status')  !!}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {!! session('error') . \Session::forget('error')  !!}
    </div>
@endif