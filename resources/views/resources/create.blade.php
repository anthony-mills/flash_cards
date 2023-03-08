@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card dark-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                        Create Learning Resource
                        <a type="button" href="{{ url(\App\Providers\RouteServiceProvider::ADMINHOME) }}" class="btn btn-sm btn-inverse">
                            Dashboard
                        </a>
                </div>

                <div class="card-body">
                    @include('alerts.status')

                    {!! Form::open(['class' => 'form', 'route' => 'resource.save']) !!}
                        {{ Form::hidden( 'resource_id', $resourceRow->id ?? null ) }}

                        <!-- Resource Category -->
                        <div class="form-group">
                            {!! Form::label('category', 'Category') !!}
                            <span class="red-text">*</span>
                            <br />
                            {!! Form::select( 'category', $existingCats->pluck('name', 'id'), $resourceRow->category ?? null, ['class' => 'form-control form-control-lg', 'dusk' => 'resource_category', 'required'] ) !!}
                        </div>

                        <!-- Resource Name-->
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            <span class="red-text">*</span>
                            {!! Form::text('name', $resourceRow->name ?? null, ['class' => 'form-control form-control-lg', 'dusk' => 'resource_nane', 'required', 'placeholder' => 'Name ( Min 2 / Max 200 Characters )', 'minlength' => 2, 'maxlength' => 200]); !!}
                        </div>

                        <!-- Resource link -->
                        <div class="form-group">
                            {!! Form::label('link', 'Resource Link') !!}
                            <span class="red-text">*</span>
                            {!! Form::text('link', $resourceRow->link ?? null, ['class' => 'form-control form-control-lg', 'dusk' => 'resource_link', 'required', 'placeholder' => 'URL  ( Max 200 Characters )', 'maxlength' => 200]); !!}
                        </div>

                        <!-- Resource Description -->
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', $resourceRow->description ?? null, ['dusk' => 'resource_description','class' => 'form-control texteditor', 'placeholder' => 'Resource Description  ( Max 500 Characters )', 'maxlength' => 500]) !!}
                        </div>

                        <span class="red-text"><em> ( * Denotes required fields )</em></span>

                        <div class="text-center">
                            {!! Form::submit(  ( isset($resourceRow->id) ? "Update Resource" : "Save Resource" ) , ['class' => 'btn btn-outline', 'dusk' => 'save_resource']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
