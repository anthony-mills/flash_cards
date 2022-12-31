@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header">My Learning Dashboard</div>

                <div class="card-body">
                    @include('alerts.status')

                    <div class="card-content-area">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/">Go to Flash Cards</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
