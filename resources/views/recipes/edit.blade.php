@extends('templates.master')

@section('title')
    Edit {{$recipe->title}}
@endsection

@section('content')
    <div class="container mw-sm-md-100 bg-white p-md-4">
        {{-- check if recipe exists --}}
        @if($recipe)
        {!! Form::open(['action' => 'RecipesController@update', 'class' => 'form']) !!}
            <div class="form-group row">
                {{Form::label('title', 'Title', ['class' => 'col-md-2'])}}
                {{Form::text('title', $recipe->title, ['class' => 'col-md-4 form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group row">
                {{Form::label('description', 'Description', ['class' => 'col-md-2'])}}
                {{Form::textarea('description', $recipe->body, ['class' => 'col-md-4 form-control', 'placeholder' => 'Description'])}}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        {{-- if recipe does not exist --}}
        @else
            <div class="jumbotron">
                <h1>Wow, such empty! </h1>
                <p>This recipe does not exist.</p>
            </div>
        @endif
    </div>
@endsection