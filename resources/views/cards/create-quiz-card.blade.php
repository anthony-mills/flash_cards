@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                        Create Quiz Card
                        <a type="button" href="{{ url(\App\Providers\RouteServiceProvider::ADMINHOME) }}" class="btn btn-sm btn-inverse">
                            Dashboard
                        </a>
                </div>

                <div class="card-body">
                    @include('alerts.status')

                    {!! Form::open(['class' => 'form', 'route' => 'quizcard.save']) !!}

                        {{ Form::hidden( 'card_id', $cardRow->id ?? null ) }}

                        <!-- Card Category -->
                        <div class="form-group">
                            {!! Form::label('category', 'Category') !!}
                            <span class="red-text">*</span>
                            <br />

                            {!! Form::select( 'category', $existingCats->pluck('name', 'id'), $cardRow->category ?? null, ['class' => 'form-control form-control-lg', 'dusk' => 'card_category', 'required'] ) !!}
                        </div>

                        <!-- Difficulty rating of the card -->
                        <div class="form-group">
                            {!! Form::label('difficulty', 'Difficulty ( 1 - 5 )') !!}
                            <span class="red-text">*</span>
                            {!! Form::number('difficulty', $cardRow->difficulty ?? null, ['class' => 'form-control', 'min' => 1, 'max' => 5, 'dusk' => 'difficulty', 'placeholder' => '3']) !!}
                        </div>

                        <!-- Problem on the front of the card -->
                        <div class="form-group">
                            {!! Form::label('problem', 'Question') !!}
                            <span class="red-text">*</span>
                             {!! Form::textarea('problem', $cardRow->problem ?? null, ['dusk' => 'card_problem','class' => 'form-control texteditor', 'placeholder' => 'Front of Card  ( Max 1000 Characters )', 'maxlength' => 1000]) !!}
                        </div>

                        <!-- Answer options for the question -->
                        <div class="form-group">
                            <div class="form-group">
                                {!! Form::label('solution', 'Answers ( Select the accepted answer )') !!}
                            </div>

                            <div class="row form-group">
                                <div class="col-md-1">
                                    {!! Form::radio('correct_answer', 'answer1', true, ['class' => 'quiz-answer-select']) !!}
                                </div>

                                <div class="col-md-11">
                                    {!! Form::text('answer1', $cardRow->answer1 ?? null, ['class' => 'quiz-answer-field', 'minlength' => 1, 'maxlength' => 250, 'dusk' => 'difficulty', 'placeholder' => 'Option 1 ( Max 250 Characters )']) !!}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-1">
                                    {!! Form::radio('correct_answer', 'answer2', false, ['class' => 'quiz-answer-select']) !!}
                                </div>

                                <div class="col-md-11">
                                    {!! Form::text('answer2', $cardRow->answer2 ?? null, ['class' => 'quiz-answer-field', 'minlength' => 1, 'maxlength' => 250, 'dusk' => 'difficulty', 'placeholder' => 'Option 2 ( Max 250 Characters )']) !!}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-1">
                                    {!! Form::radio('correct_answer', 'answer3', false, ['class' => 'quiz-answer-select']) !!}
                                </div>

                                <div class="col-md-11">
                                    {!! Form::text('answer3', $cardRow->answer3 ?? null, ['class' => 'quiz-answer-field', 'minlength' => 1, 'maxlength' => 250, 'dusk' => 'difficulty', 'placeholder' => 'Option 3 ( Max 250 Characters )']) !!}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-1">
                                    {!! Form::radio('correct_answer', 'answer4', false, ['class' => 'quiz-answer-select']) !!}
                                </div>

                                <div class="col-md-11">
                                    {!! Form::text('answer4', $cardRow->answer4 ?? null, ['class' => 'quiz-answer-field', 'minlength' => 1, 'maxlength' => 250, 'dusk' => 'difficulty', 'placeholder' => 'Option 4 ( Max 250 Characters )']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('tags', 'Tags') !!}
                            <select multiple id="tag-input" class="form-control" name="tags[]">
                                @if (isset($cardTags))
                                    @foreach($cardTags->pluck('tag') as $cardTag)
                                        <option value="{{ $cardTag }}">{{ $cardTag }}</option>
                                    @endforeach
                                @endif
                            </select>
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
