@if (session('status'))
    <div class="alert alert-success" role="alert">
        {!! session('status') . \Session::forget('status')  !!}
    </div>
@endif

@if (session('errors'))
    <div class="alert alert-danger" role="alert">
        @php $errors = session('errors'); @endphp
        @if (is_string($errors))
            {!! session('errors') . \Session::forget('errors')  !!}
        @endif

        @if (is_object($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
                {!! \Session::forget('errors') !!}
            </ul>
        @endif
    </div>
@endif
