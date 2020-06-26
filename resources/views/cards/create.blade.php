@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header">Create Flash Card</div>

                <div class="card-body">
                    @include('alerts.status')
                        
                    {!! Form::open(['class' => 'form', 'route' => 'card.save']) !!}

                        {{ Form::hidden( 'card_id', $cardRow->id ?? null ) }}

                        <!-- Card Category -->
                        <div class="form-group">
                            {!! Form::label('category', 'Category') !!}
                            <span class="red-text">*</span>
                            <br />

                            {!! Form::select( 'category', $existingCats->pluck('name', 'id'), $cardRow->category ?? null, ['class' => 'form-control form-control-lg', 'dusk' => 'card_category', 'required'] ) !!}
                        </div>

                        <!-- Problem on the front of the card -->
                        <div class="form-group">
                            {!! Form::label('problem', 'Problem') !!}
                            <span class="red-text">*</span>
                             {!! Form::textarea('problem', $cardRow->problem ?? null, ['dusk' => 'category_name','class' => 'form-control texteditor', 'placeholder' => 'Front of Card  ( Max 250 Characters )', 'maxlength' => 250]) !!}
                        </div>        

                        <!-- Solution on the back of the card -->
                        <div class="form-group">
                            {!! Form::label('solution', 'Solution') !!}
                            <span class="red-text">*</span>
                             {!! Form::textarea('solution', $cardRow->solution ?? null, ['dusk' => 'category_name','class' => 'form-control texteditor', 'placeholder' => 'Back of Card ( Max 250 Characters )', 'maxlength' => 250]) !!}
                        </div>    

                        <span class="red-text"><em> ( * Denotes required fields )</em></span>

                        <div class="text-center">
                            {!! Form::submit(  ( isset($cardRow->id) ? "Update Card" : "Save Card" ) , ['class' => 'btn btn-outline', 'dusk' => 'save_card']) !!}
                        </div>                      
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
