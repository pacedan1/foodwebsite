@extends('templates.master')

@section('title', 'New Recipe')

@section('content')
    <div class="container mw-sm-md-100 bg-white p-md-4">
        {!! Form::open(['action' => 'RecipesController@store', 'class' => 'form']) !!}
            <div class=" form-group row">
                {{Form::label('title', 'Title', ['class' => 'col-md-2'])}}
                {{Form::text('title', '', ['class' => 'col-md-4 form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class=" form-group row">
                {{Form::label('description', 'Description', ['class' => 'col-md-2'])}}
                {{Form::textarea('description', '', ['class' => 'col-md-4 form-control', 'placeholder' => 'Description'])}}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        
        {{-- <p>image path</p>
        <p>Ingrediants</p>
        <p>method</p> --}}
    </div>
@endsection