@extends('layouts.app')

@section('content')
	<div class="container dark-container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
				<ul id="deck">
					<li class="card">
						<div class="side_one">
							<p>How many licks does it take to get to the center of a Tootsie Pop?</p>
						</div>

						<div class="side_two">
							<p>The world may never know.</p>
						</div>
					</li>

					<li class="card">
						<div class="side_one">
							<p>Slide 3?dkkkkkkkkkkkkkkkkkkk</p>
						</div>

						<div class="side_two">
							<p>NFI</p>
						</div>
					</li>				
				</ul>

				<div id="nav_deck">
					<span class="icon" id="prev" data-icon="<"><span class="visuallyhidden">Previous</span></span>
					<span class="icon" id="flipper" data-icon="/"><span class="visuallyhidden">Flip</span></span>
					<span class="icon" id="next" data-icon=">"><span class="visuallyhidden">Next</span></span>
				</div>						
	        </div>
	    </div>
	</div>
@endsection
