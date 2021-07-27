@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Showing {{ $resourceRows->count() }}  of {{$resourceRows->total() }} Existing Cards
                    <a type="button" href="{{ url('/dashboard') }}" class="btn btn-sm btn-inverse">
                        Dashboard
                    </a>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include('alerts.status')

                        @if ( count($resourceRows) > 0 )

                            {!! $resourceRows->links("layouts.pagination") !!}

                            <table class="table">
                                <thead class="thead-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </thead>

                                <tbody>
                                    @foreach( $resourceRows as $existingResource )
                                        <tr>
                                            <td>{{ $existingResource->id }}</td>
                                            <td><a href="{{ $existingResource->link }}" target="_blank">{{ $existingResource->link }}</a></td>
                                            <td>{!! $existingResource->description !!}</td>
                                            <td>{{ Carbon\Carbon::parse($existingResource->created_at)->format('d/m/Y') }}</td>
                                            <td class="text-center">
                                                <a href="/resource/edit/{{ $existingResource->id }}" class="btn btn-outline btn-block btn-sm mt-1">
                                                    Edit
                                                </a>

                                                <button type="button" data-delete="/resource/delete/{{ $existingResource->id }}" class="btn btn-outline delete-item btn-block btn-sm mt-1">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $resourceRows->links("layouts.pagination") }}

                        @else
                            <p>Category contains no saved resources.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
