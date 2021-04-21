@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Existing Categories
                    <a type="button" href="{{ url('/dashboard') }}" class="btn btn-sm btn-inverse">
                        Dashboard
                    </a>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include('alerts.status')

                        @if ( count($existingCats) > 0 )
                            {!! $existingCats->links("layouts.pagination") !!}

                            <table class="table">
                                <thead class="thead-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Cards</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </thead>

                                <tbody>
                                    @foreach( $existingCats as $existingCat )
                                        <tr>
                                            <td>{{ $existingCat->id }}</td>
                                            <td>{{ $existingCat->name }}</td>
                                            <td>{{ count($existingCat->flashCards) }}</td>
                                            <td>{{ $existingCat->created_at }}</td>
                                            <td class="text-center">
                                                <a href="/card/category/{{ $existingCat->id }}" class="btn btn-outline">
                                                    View Cards
                                                </a>

                                                <button type="button" data-msg="{!! config('flash_cards.card_categories.delete_confirm') !!}" data-delete="/card/categories/delete/{{ $existingCat->id }}" class="delete-item btn btn-outline">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $existingCats->links("layouts.pagination") !!}
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
