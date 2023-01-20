@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Existing Users
                    <a type="button" href="{{ url(\App\Providers\RouteServiceProvider::ADMINHOME) }}" class="btn btn-sm btn-inverse">
                        Dashboard
                    </a>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include('alerts.status')

                        @if ( $sysUsers->count() > 0 )
                            {!! $sysUsers->links("layouts.pagination") !!}

                            <table class="table">
                                <thead class="thead-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </thead>

                                <tbody>
                                    @foreach( $sysUsers as $sysUser )
                                        <tr>
                                            <td>{{ $sysUser->id }}</td>
                                            <td>{{ $sysUser->name }}</td>
                                            <td>{{ $sysUser->email }}</td>
                                            <td>{{ $sysUser->created_at }}</td>
                                            <td class="text-center">
                                                <a href="/users/details/{{ $sysUser->id }}" class="btn btn-outline">
                                                    Details
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $sysUsers->links("layouts.pagination") !!}
                        @else
                            <p>There are no stored card categories to display.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
