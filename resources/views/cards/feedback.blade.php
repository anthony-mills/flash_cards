@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Showing {{ $cardFeedback->count() }} of {{$cardFeedback->total() }} Stored Comments
                    <a type="button" href="{{ url('/dashboard') }}" class="btn btn-sm btn-inverse">
                        Dashboard
                    </a>
                </div>

                <div class="card-body">
                    <div class="card-content-area">
                        @include('alerts.status')

                        @if ( count($cardFeedback) > 0 )

                            {!! $cardFeedback->links("layouts.pagination") !!}

                            <table class="table">
                                <thead class="thead-dark">
                                    <th scope="col">User ID</th>
                                    <th scope="col">Card Comment</th>
                                    <th scope="col">User Agent</th>
                                    <th scope="col">IP</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </thead>

                                <tbody>
                                    @foreach( $cardFeedback as $cardComment )
                                        <tr>
                                            <td>{{ (is_numeric($cardComment->user_id) ? $cardComment->user_id : '') }}</td>
                                            <td>{{ $cardComment->feedback }}</td>                                            
                                            <td>{{ $cardComment->user_agent }}</td>
                                            <td>{{ $cardComment->ip }}</td>                                            
                                            <td>{{ Carbon\Carbon::parse($cardComment->created_at)->format('d/m/Y') }}</td>
                                            <td class="text-center">
                                                <a href="/card/edit/{{ $cardComment->card_id }}" class="btn btn-outline btn-block btn-sm mt-1">
                                                    View Card
                                                </a>

                                                <button type="button" data-delete="/card/feedback/delete/{{ $cardComment->id }}" class="btn btn-outline delete-item btn-block btn-sm mt-1">
                                                    Delete Comment
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $cardFeedback->links("layouts.pagination") }}

                        @else
                            <p>Currently no stored card feedback.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
