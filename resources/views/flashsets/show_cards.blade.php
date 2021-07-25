@extends('layouts.app')

@section('content')
	<div class="container dark-container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	        	@if (count($existingCards) > 1)
	        		<?php $cardCount=1; ?>
					<ul id="deck">
						@foreach( $existingCards as $existingCard )
							<li class="flash-card" data-card-number="{!! $cardCount++ !!}" data-card-id="{!! $existingCard->id !!}">
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
									<div class="current-card-count">
										Card: <span id="current-card">1</span> of {{ count($existingCards) }}
									</div>			

									<div class="current-card-side">
										Side: <span id="current-side">Question</span>
									</div>	
								</div>
								
								<div class="feedback-icon">
									<a href="#" data-toggle="modal" data-target="#feedback-modal" title="Leave Card Feedback">
										<img src="/img/feedback.png"/>
									</a>
								</div>
							</div>

							<div class="col-xs-1 text-left">
								<span class="icon" id="next" data-icon=">"><span class="visuallyhidden">Next</span></span>									
							</div> 																
						</div>						
					</div>
					
					<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Leave Card Feedback</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
												'dusk' => 'card_feedback',
												'class' => 'form-control', 
												'placeholder' => 'Message ( Max 250 Characters )', 
												'maxlength' => 250 
											])
										!!}
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" id="save-feedback" class="btn btn-primary">Send</button>	
								</div>								
							</div>
						</div>
					</div>									
				@else 
					@include('alerts.insufficient_cards')
				@endif					
	        </div>
	    </div>
	</div>
@endsection
