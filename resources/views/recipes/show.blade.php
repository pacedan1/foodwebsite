@extends('templates.master')

@section('title')
    {{$recipe->title}}
@endsection

@section('content')
    <div class="container mw-sm-md-100 bg-white p-md-4">
        {{-- check if recipe exists --}}
        @if($recipe)
        {!! Form::open(['action' => ['RecipesController@destroy', $recipe->id], 'class' => 'form']) !!}
            <a href="/recipes/{{$recipe->id}}/edit" class="btn btn-primary">Edit</a>
            {{ Form::hidden('_method', 'delete') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
            <div class="row mx-a p-0 pb-3 px-md-1 py-md-4 bg-secondary">
                <div class="col-md flex-grow-0">
                        <img src="{{--- $recipe->image ---}}" alt="" class="img-fluid recipe-image bg-dark d-block m-auto">
                </div>
                <div class="col-md mt-4 text-center text-md-left">
                    <h3>{{$recipe->title}}</h3>
                    <p>{{$recipe->body}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 bg-white">Ingrediants</div>
                <div class="col bg-white">Method</div>
            </div>
        {{-- if recipe does not exist --}}
        @else
            <div class="jumbotron">
                <h1 class=>Wow, such empty! </h1>
                <p>This recipe does not exist, <a href="/about">contact us</a> if you would like to suggest the recipe.</p>
            </div>
        @endif
    </div>
@endsection