@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Showing {{ $resourceRows->count() }}  saved resources.
                    <a type="button" href="{{ url(\App\Providers\RouteServiceProvider::USERHOME) }}" class="btn btn-sm btn-inverse">
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
                                    <th scope="col">Category</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Description</th>
                                </thead>

                                <tbody>
                                    @foreach( $resourceRows as $existingResource )
                                        <tr>
                                            <td>{{ App\Models\CardCategories::getCategoryName($existingResource->category) }}</td>
                                            <td><a href="{{ $existingResource->link }}" target="_blank">{{ $existingResource->link }}</a></td>
                                            <td>{!! $existingResource->description !!}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $resourceRows->links("layouts.pagination") !!}
                        @else
                            <p>Currently no saved resources.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
