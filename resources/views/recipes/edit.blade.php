@extends('templates.master')

@section('title')
    Edit {{$recipe->title}}
@endsection

@section('content')
    <div class="container mw-sm-md-100 bg-white p-md-4">
        {{-- Open form --}}
        {!! Form::open(['action' => ['RecipesController@update', $recipe->id], 'class' => 'form']) !!}
        {{-- Title --}}
            <div class="form-group row">
                {{Form::label('title', 'Title', ['class' => 'col-md-2'])}}
                {{Form::text('title', $recipe->title, ['class' => 'col-md-4 form-control', 'placeholder' => 'Title'])}}
            </div>
        {{-- Body --}}
            <div class="form-group row">
                {{Form::label('description', 'Description', ['class' => 'col-md-2'])}}
                {{Form::textarea('description', $recipe->body, ['class' => 'col-md-4 form-control', 'placeholder' => 'Description'])}}
            </div>
        {{-- Put Method and submit button --}}
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection