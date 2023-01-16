@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    User Details
                    <a type="button" href="{{ url()->previous() }}" class="btn btn-sm btn-inverse">
                        User Listing
                    </a>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include('alerts.status')
                        <h3 class="pb-3">Details</h3>
                        <div class="row pb-5">
                            <div class="col">
                                <b>UID:</b> {{ $user->id }}
                            </div>

                            <div class="col">
                                <b>Email:</b> {{ $user->email }}
                            </div>

                            <div class="col">
                                <b>Roles:</b>
                                @if (count($user->getRoleNames()) > 0)
                                    @foreach($user->getRoleNames() as $roleName)
                                        {{ $roleName }}
                                    @endforeach
                                @else
                                    No permissions defined.
                                @endif
                            </div>
                        </div>

                        <h3 class="pb-3">Login Events</h3>

                        @if ($logins->count() > 0)
                            <table class="table">
                                <thead class="thead-dark">
                                <th scope="col">IP</th>
                                <th scope="col">User Agent</th>
                                <th scope="col">Time</th>
                                </thead>

                                <tbody>
                                    @foreach($logins as $login)
                                        <tr>
                                            <td>{{ $login->ip }}</td>
                                            <td>{{ $login->user_agent }}</td>
                                            <td>{{ $login->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            No login events recorded.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
