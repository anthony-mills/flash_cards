@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Flash Cards</div>

                <div class="card-body">
                    @include('alerts.status')
                        
                    <ul>
                        <li>
                            <a href="/card/create">Create Flash Card</a>
                        </li>                        
                        
                        <li>
                            <a href="/card/categories/create">Create Category</a>
                        </li>

                        <li>
                            <a href="/card/categories/list">Existing Categories</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
