@php use App\Providers\CardTypes\CardTypes;use App\Providers\RouteServiceProvider; @endphp

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card dark-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Showing {{ $cardRows->count() }} of {{ $cardRows->total() }} saved {{CardTypes::name("FLASH")}}
                        s.
                        <a type="button" href="{{ url(RouteServiceProvider::ADMINHOME) }}"
                           class="btn btn-sm btn-inverse">
                            Dashboard
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="card-content-area">
                            @include('alerts.status')

                            @if ( count($cardRows) > 0 )

                                {!! $cardRows->links("layouts.pagination") !!}

                                <table class="table">
                                    <thead class="thead-dark">
                                    <th scope="col">Type</th>
                                    <th scope="col">Difficulty</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Actions</th>
                                    </thead>

                                    <tbody>
                                    @foreach( $cardRows as $existingCard )
                                        <tr>
                                            <td>{{ CardTypes::nameById($existingCard->type) }}</td>
                                            <td>{{ $existingCard->difficulty }} / 5</td>
                                            <td>{!! $existingCard->problem !!}</td>
                                            <td>
                                                @if ($existingCard->type == CardTypes::id("QUIZ"))
                                                    <?php $answer = json_decode($existingCard->solution); ?>
                                                    {!! $answer->{$answer->correct_answer} !!}
                                                @else
                                                    {!! $existingCard->solution !!}
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="/{!! CardTypes::urlById($existingCard->type) !!}/edit/{{ $existingCard->id }}"
                                                   class="btn btn-outline btn-block btn-sm mt-1">
                                                    Edit
                                                </a>

                                                <button type="button" data-delete="/{!! CardTypes::urlById($existingCard->type) !!}/delete/{{ $existingCard->id }}"
                                                        class="btn btn-outline delete-item btn-block btn-sm mt-1">Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{ $cardRows->links("layouts.pagination") }}

                            @else
                                <p>Category contains no cards.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
