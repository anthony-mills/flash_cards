@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Category Cards: {{ $catRow->name }}</div>

                <div class="card-body">
                    @include('alerts.status')

                    @if ( count($catRow->flashCards) > 0 )                    
                        <table class="table">
                            <thead class="thead-dark">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Cards</th> 
                                <th scope="col">Created</th>  
                                <th scope="col">Actions</th>                                                                                    
                            </thead>

                            <tbody>
                                @foreach( $catRow->flashCards as $existingCard )
                                    <tr>
                                        <td>{{ $existingCard->id }}</td>
                                        <td>{!! $existingCard->problem !!}</td>
                                        <td>{!! $existingCard->solution !!}</td>
                                        <td>{{ Carbon\Carbon::parse($existingCard->created_at)->format('d/m/Y') }}</td>     
                                        <td class="text-center">
                                            <a href="/card/edit/{{ $existingCard->id }}">
                                                <button type="button" class="btn btn-info btn-block btn-sm mt-1">Edit</button>
                                            </a>

                                            <a href="/card/delete/{{ $existingCard->id }}">
                                                <button type="button" class="btn btn-primary btn-block btn-sm mt-1">Delete</button>
                                            </a>
                                        </td>                                                                                           
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <p>Category contains no cards.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
