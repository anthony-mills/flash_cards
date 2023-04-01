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

                                {!! Form::open(['class' => "transparent-form"]) !!}
                                <div class="side_two">
                                    <div class="quiz-card-content">
                                        @include('flashsets.partials.quiz_card_responses', ['cardChoices' => json_decode($existingCard->solution) ])
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
                                <div class="current-card-count">
                                    Card: <span id="current-card">1</span> of {{ count($existingCards) }}
                                </div>

                                <div class="current-card-side">
                                    Side: <span id="current-side">Question</span>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="card-action-icon">
                                    <a href="/" title="Exit cards and return home.">
                                        <img src="/img/home.png"/>
                                    </a>
                                </div>

                                <div class="card-action-icon">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#feedback-modal" dusk="open-feedback-modal" title="Leave Card Feedback">
                                        <img src="/img/feedback.png"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" dusk="leave-card-feedback">Leave Card Feedback</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">
                                    Do you like this card? Hate it? Do you believe it's incorrect?
                                </p>

                                <p class="text-center">
                                    Leave your feedback below:
                                </p>

                                <form id="card-feedback">
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::textarea(
                                            'feedback',
                                            null,
                                            [
                                                'dusk' => 'card-feedback-field',
                                                'class' => 'form-control',
                                                'placeholder' => 'Message ( Max 250 Characters )',
                                                'maxlength' => 250
                                            ])
                                        !!}
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="save-feedback" class="btn btn-primary" dusk="save-feedback">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    @include('alerts.insufficient_cards', ['cardType' => $cardType])
                @endif
            </div>
        </div>
    </div>
@endsection
