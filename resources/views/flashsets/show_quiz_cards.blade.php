@extends('layouts.app')

@section('content')
    <div class="container dark-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (count($existingCards) > 1)
                    @php $cardCount=1; @endphp
                    <ul id="deck">
                        @foreach( $existingCards as $existingCard )
                            <li class="flash-card" data-card-type="quiz" data-card-number="{!! $cardCount++ !!}" data-card-id="{!! $existingCard->id !!}">
                                <div class="side_one">
                                    <div class="flash-card-content">{!! $existingCard->problem !!}</div>
                                </div>

                                {!! Form::open(["class" => "transparent-form"]) !!}
                                <div class="side_two">
                                    <div class="quiz-card-content">
                                        @include("flashsets.partials.quiz_card_responses", ["cardChoices" => json_decode($existingCard->solution) ])
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </li>
                        @endforeach
                    </ul>
            </div>

            <div class="col-md-6">
                <div class="card-body card-controls">
                    <div class="row justify-content-center">
                        <div class="col-xs-4 text-center">
                            <span class="icon" id="flipper" data-icon="/">
                                <span class="visuallyhidden">Flip</span>
                            </span>

                            <div class="card-set-state">
                                <div class="current-card-count" data-current-card="1" data-card-count="{{ count($existingCards) }}">
                                    Card: <span id="current-card">1</span> of {{ count($existingCards) }}
                                </div>

                                <div class="current-card-side">
                                    Side: <span id="current-side">Question</span>
                                </div>
                            </div>

                            @include('flashsets.partials.action_buttons')
                        </div>
                    </div>
                </div>

                @include("flashsets.partials.set_complete_modal")
                @include("flashsets.partials.feedback_modal")

                @else
                    @include('alerts.insufficient_cards', ['cardType' => $cardType])
                @endif
            </div>
        </div>
    </div>
@endsection
