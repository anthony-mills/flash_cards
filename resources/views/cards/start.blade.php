@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card get-started">
                <div class="card-header">Quiz Options</div>

                <div class="card-body">
                    @include('alerts.status')

                    @if ( $cardCats->count() > 0 )
                        {!! Form::open(['class' => 'form', 'route' => 'card.begin']) !!}

                            <!-- Card Category -->
                            <div class="form-group">
                                {!! Form::label('category', 'Topic') !!}
                                <span class="red-text">*</span>
                                <br />

                                {!! Form::select( 'category', $cardCats->pluck('name', 'id'), null, ['class' => 'form-control form-control-lg', 'dusk' => 'card_category', 'required'] ) !!}
                            </div>

                            <!-- Number of cards -->
                            <div class="form-group">
                                {!! Form::label('card_number', 'Card Number') !!}
                                <span class="red-text">*</span>
                                <br />

                                {!! Form::select( 'card_number', $cardNumber, null, ['class' => 'form-control form-control-lg', 'dusk' => 'card_number', 'required'] ) !!}
                            </div>

                            <div class="text-center">
                                {!! Form::submit('Continue', ['class' => 'btn btn-primary', 'dusk' => 'continue_button']) !!}
                            </div>                      
                        {!! Form::close() !!}
                    @else 
                        <p>Some topics and cards need to be added to the system before you can proceed.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
