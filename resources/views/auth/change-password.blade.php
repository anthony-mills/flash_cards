@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="control-label">Current Password</label>

                            <input id="current-password" type="password" class="form-control" name="current-password" required>

                            @if ($errors->has('current-password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current-password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="control-label">New Password</label>

                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                            @if ($errors->has('new-password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('new-password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="control-label">Confirm New Password</label>
                            
                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
