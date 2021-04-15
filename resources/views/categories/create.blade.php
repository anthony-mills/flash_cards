@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Create New Category
                    <a type="button" href="{{ url('/dashboard') }}" class="btn btn-sm btn-inverse">
                        Dashboard
                    </a>
                </div>

                <div class="card-body">
                    @include('alerts.status')

                    {!! Form::open(['class' => 'form', 'route' => 'category.save']) !!}

                        <!-- Name for the card category -->
                        <div class="form-group">
                            {!! Form::label('name', 'Category Name') !!}
                            <span class="red-text">*</span>
                            {!! Form::text('name', null, ['class' => 'form-control', 'dusk' => 'name', 'placeholder' => 'Classic Books']) !!}
                        </div>

                        <span class="red-text"><em> ( * Denotes required fields )</em></span>

                        <div class="text-center">
                            {!! Form::submit('Save Category', ['class' => 'btn btn-outline', 'dusk' => 'save_category']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
