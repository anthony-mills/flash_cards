@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header">Flash Cards Management</div>

                <div class="card-body">
                    @include('alerts.status')

                    <div class="card-content-area">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/categories/create">Create Category</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/flash-card/create">Create Flash Card</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/resource/create">Create Learning Resource</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/categories/list">Existing Categories</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/card/feedback/view">View Flash Card Feedback</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/users/list">View Users</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/">Go to Flash Cards</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted text-center">
                    Currently {{ $cardCount }} saved flash cards & {{ $userCount }} users.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
