<div class="row">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'correct_answer',
            'answer1',
            isset($cardChoices->correct_answer) && $cardChoices->correct_answer == 'answer1',
            ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution1']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer1 !!}</div>
</div>

<div class="row">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'correct_answer',
            'answer2',
            isset($cardChoices->correct_answer) && $cardChoices->correct_answer == 'answer2',
            ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution2']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer2 !!}</div>
</div>

<div class="row">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'correct_answer',
            'answer3',
            isset($cardChoices->correct_answer) && $cardChoices->correct_answer == 'answer3',
            ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution3']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer3 !!}</div>
</div>

<div class="row">
    <div class="col-xs-1 quiz-choice-select">
        {!! Form::radio(
            'correct_answer',
            'answer4',
            isset($cardChoices->correct_answer) && $cardChoices->correct_answer == 'answer4',
            ['class' => 'quiz-answer-radio', 'dusk' => 'quiz_solution4']
        ) !!}
    </div>

    <div class="col-sm-11 quiz-answer-text">{!! $cardChoices->answer4 !!}</div>
</div>
