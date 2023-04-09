@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="col-md-4">
                        Showing {{ $resourceRows->count() }} of {{$resourceRows->total() }} saved resources.
                    </div>

                    <div class="col-md-6">
                        @include("resources.partials.category_select", ["catId" => $catId, "catList" => $catList])
                    </div>

                    <div class="col-md-2">
                        <a type="button" href="{{ url(\App\Providers\RouteServiceProvider::ADMINHOME) }}" class="btn btn-sm btn-inverse">
                            Dashboard
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include("alerts.status")

                        @if ( count($resourceRows) > 0 )

                            {!! $resourceRows->links("layouts.pagination") !!}

                            <table class="table">
                                <thead class="thead-dark">
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created</th>
                                    @role('admin')
                                        <th scope="col">Actions</th>
                                    @endrole
                                </thead>

                                <tbody>
                                    @foreach( $resourceRows as $existingResource )
                                        <tr>
                                            <td>
                                                <a href="{{ $existingResource->link }}" target="_blank">
                                                    {{ $existingResource->name }}
                                                </a>
                                            </td>
                                            <td>{!! $existingResource->description !!}</td>
                                            <td>{{ Carbon\Carbon::parse($existingResource->created_at)->format("d/m/Y") }}</td>
                                            @role('admin')
                                                <td class="text-center">
                                                    <a href="/resource/edit/{{ $existingResource->id }}" class="btn btn-outline btn-block btn-sm mt-1">
                                                        Edit
                                                    </a>

                                                    <button type="button" data-delete="/resource/delete/{{ $existingResource->id }}" class="btn btn-outline delete-item btn-block btn-sm mt-1">Delete</button>
                                                </td>
                                            @endrole
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
