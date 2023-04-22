@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header">My Learning Dashboard</div>

                <div class="card-body">
                    @include('alerts.status')

                    <div class="card-content-area row">
                        <div class="col">
                            <h4>Card Sets</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="/">Start a Card Set</a>
                                </li>

                                <li class="list-group-item">
                                    @php $cardCount['FLASH'] = (isset($cardCount['FLASH'])) ? $cardCount['FLASH'] : 0; @endphp
                                    @if ($cardCount['FLASH'] >= 10)
                                        <a href="#">Start Flash Card Review</a> ( {{$cardCount['FLASH']}} Cards )
                                    @else
                                        <a href="" class="inactive-link">Start Flash Card Review</a> ( {{$cardCount['FLASH']}} Cards )
                                    @endif
                                </li>

                                <li class="list-group-item">
                                    @php $cardCount['QUIZ'] = (isset($cardCount['QUIZ'])) ? $cardCount['QUIZ'] : 0; @endphp
                                    @if ($cardCount['QUIZ'] >= 10)
                                        <a href="#">Start Quiz Card Review</a> ( {{$cardCount['QUIZ']}} Cards )
                                    @else
                                        <a href="" class="inactive-link">Start Quiz Card Review</a> ( {{$cardCount['QUIZ']}} Cards )
                                    @endif
                                </li>
                            </ul>
                        </div>

                        <div class="col">
                            <h4>Learning Resources</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="/resources/view">Learning Resources</a>
                                </li>
                            </ul>

                            <br />

                            <h4>Saved Cards</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#">Flash cards</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="#">Quiz Cards</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-muted text-center">
                   {{$cardMsg}}
                </div>
        </div>
    </div>
</div>
@endsection
