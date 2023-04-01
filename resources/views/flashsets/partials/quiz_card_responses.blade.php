{!! Form::hidden('solution', $cardChoices->correct_answer) !!}

<div class="row quiz-response">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'card_answer', 'answer1', false, ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution1']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer1 !!}</div>
</div>

<div class="row quiz-response">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'card_answer', 'answer2', false, ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution2']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer2 !!}</div>
</div>

<div class="row quiz-response">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'card_answer', 'answer3', false, ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution3']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer3 !!}</div>
</div>

<div class="row quiz-response">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'card_answer', 'answer4', false, ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution4']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer4 !!}</div>
</div>
