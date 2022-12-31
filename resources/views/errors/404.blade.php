@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <ul id="deck">
                        <li class="flash-card">
                            <div class="side_one">
                                <div class="flash-card-content">
                                    <h3 class="text-center">Not Found</h3>

                                    <p class="text-center">We have no idea what you are looking for.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
