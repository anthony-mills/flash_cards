@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Flash Card</div>

                <div class="card-body">
                    @include('alerts.status')
                        
                    {!! Form::open(['class' => 'form', 'route' => 'card.save']) !!}

                        <!-- Card Category -->
                        <div class="form-group">
                            {!! Form::label('category', 'Category') !!}
                            <span class="red-text">*</span>
                            <br />

                            {!! Form::select( 'category', $existingCats->pluck('name', 'id'), null, ['dusk' => 'card_category', 'required'] ) !!}
                        </div>

                        <!-- Problem on the front of the card -->
                        <div class="form-group">
                            {!! Form::label('problem', 'Problem') !!}
                            <span class="red-text">*</span>
                             {!! Form::textarea('problem', null, ['dusk' => 'category_name','class' => 'form-control', 'placeholder' => 'Front of Card  ( Max 250 Characters )', 'maxlength' => 250]) !!}
                        </div>        

                        <!-- Solution on the back of the card -->
                        <div class="form-group">
                            {!! Form::label('solution', 'Solution') !!}
                            <span class="red-text">*</span>
                             {!! Form::textarea('solution', null, ['dusk' => 'category_name','class' => 'form-control', 'placeholder' => 'Back of Card ( Max 250 Characters )', 'maxlength' => 250]) !!}
                        </div>    

                        <span class="red-text"><em> ( * Denotes required fields )</em></span>

                        <div class="text-center">
                            {!! Form::submit('Save Card', ['class' => 'btn btn-primary', 'dusk' => 'save_card']) !!}
                        </div>                      
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
