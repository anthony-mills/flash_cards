@extends('layouts.app')

@section('content')
	<div class="container dark-container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	        	@if (count($existingCards) > 1)
	        		<?php $cardCount=1; ?>
					<ul id="deck">
						@foreach( $existingCards as $existingCard )
							<li class="flash-card" data-card-number="{{ $cardCount++ }}">
								<div class="side_one">
									<p>{{ $existingCard->problem }}</p>
								</div>

								<div class="side_two">
									<p>{{ $existingCard->solution }}</p>
								</div>
							</li>
						@endforeach				
					</ul>
			</div>

			<div class="col-md-6">
					<div class="card">
	                	<div class="card-body card-controls">
							<div class="row justify-content-center">
								<div class="col-xs-1 text-right">
									<span class="icon" id="prev" data-icon="<"><span class="visuallyhidden">Previous</span></span>
								</div> 

								<div class="col-xs-4 text-center">
									<span class="icon" id="flipper" data-icon="/"><span class="visuallyhidden">Flip</span></span>	

									<div class="current-card-count">
										Card <span id="current-card">1</span> of {{ count($existingCards) }}
									</div>								
								</div>

								<div class="col-xs-1 text-left">
									<span class="icon" id="next" data-icon=">"><span class="visuallyhidden">Next</span></span>									
								</div> 																
							</div>						
						</div>
					</div>					
				@else 
					@include('alerts.insufficent_cards')
				@endif					
	        </div>
	    </div>
	</div>
@endsection
