@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Flash Cards Management</div>

                <div class="card-body">
                    @include('alerts.status')
                        
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/card/create">Create Flash Card</a>
                        </li>                        
                        
                        <li class="list-group-item">
                            <a href="/card/categories/create">Create Category</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/card/categories/list">Existing Categories</a>
                        </li>
                    </ul>
                </div>

                <div class="card-footer text-muted text-center">
                    Currently {{ $cardCount }} saved flash cards
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
