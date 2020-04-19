@extends('layouts.app')

@section('content')
	<div class="container dark-container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	@if (count($existingCards) > 1)
					<ul id="deck">
						@foreach( $existingCards as $existingCard )
							<li class="flash-card">
								<div class="side_one">
									<p>{{ $existingCard->problem }}</p>
								</div>

								<div class="side_two">
									<p>{{ $existingCard->solution }}</p>
								</div>
							</li>
						@endforeach				
					</ul>

					<div id="nav_deck">
						<span class="icon" id="prev" data-icon="<"><span class="visuallyhidden">Previous</span></span>
						<span class="icon" id="flipper" data-icon="/"><span class="visuallyhidden">Flip</span></span>
						<span class="icon" id="next" data-icon=">"><span class="visuallyhidden">Next</span></span>
					</div>						
				@else 
					<p>The system needs at least 2 stored flash cards to get started.</p>
				@endif					
	        </div>
	    </div>
	</div>
@endsection
