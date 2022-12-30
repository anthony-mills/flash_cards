@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card dark-card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
                    @include('alerts.status')

                    {!! Form::open(['class' => 'form', 'route' => 'password.update']) !!}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-errors' : '' }}">
                            <label for="new-password" class="control-label">Current Password</label>

                            {!! Form::password('current_password', ['class' => 'form-control', 'required']) !!}

                            @if ($errors->has('current_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current_password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-errors' : '' }}">
                            <label for="new-password" class="control-label">New Password</label>

                            {!! Form::password('new_password', ['class' => 'form-control', 'required']) !!}

                            @if ($errors->has('new_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('new_password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="control-label">Confirm New Password</label>

                            {!! Form::password('new_password_confirmation', ['class' => 'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                {!! Form::submit( "Update Password", ['class' => 'btn btn-outline', 'dusk' => 'update_password']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
