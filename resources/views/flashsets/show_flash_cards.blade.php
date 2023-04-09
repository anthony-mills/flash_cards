@extends('layouts.app')

@section('content')
	<div class="container dark-container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	        	@if (count($existingCards) > 1)
	        		@php $cardCount=1; @endphp
					<ul id="deck">
						@foreach( $existingCards as $existingCard )
							<li class="flash-card" data-card-type="flash" data-card-number="{!! $cardCount++ !!}" data-card-id="{!! $existingCard->id !!}">
								<div class="side_one">
									<div class="flash-card-content">{!! $existingCard->problem !!}</div>
								</div>

								<div class="side_two">
									<div class="flash-card-content">{!! $existingCard->solution !!}</div>
								</div>
							</li>
						@endforeach
					</ul>
			</div>

			<div class="col-md-6">
                	<div class="card-body card-controls">
						<div class="row justify-content-center">
							<div class="col-xs-1 text-right">
								<span class="icon" id="prev" data-icon="<"><span class="visuallyhidden">Previous</span></span>
							</div>

							<div class="col-xs-4 text-center">
								<span class="icon" id="flipper" data-icon="/"><span class="visuallyhidden">Flip</span></span>

								<div class="card-set-state">
                                    <div class="current-card-count" data-current-card="1" data-card-count="{{ count($existingCards) }}">
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

							<div class="col-xs-1 text-left">
								<span class="icon" id="next" data-icon=">"><span class="visuallyhidden">Next</span></span>
							</div>
						</div>
					</div>

                    @include('flashsets.partials.feedback_modal')
				@else
					@include('alerts.insufficient_cards')
				@endif
	        </div>
	    </div>
	</div>
@endsection
