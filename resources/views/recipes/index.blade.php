@extends('templates.master')

@section('title', 'Recipes')

@section('content')
    <div class="container bg-white p-4">
        @if(count($recipes) > 1)
            {{-- Loop for each Recipe --}}
            @foreach ($recipes as $recipe)
                <div class="card-recipe flex-row">
                        <a href="#recipeID" class="float-left card-image-recipe">
                            <img src="#TODO Recipe Thumbnail" alt="" class="img-fluid image-center">
                        </a>
                        <div class="card-body p-1">
                            <h3 class="card-title">
                                <a href="#recipeID" class="link-unstyled">{{$recipe->title}}</a>
                            </h3>
                            <p class="card-text pt-1">
                                #TODO RECIPE SHORT DESCRIPTION
                            </p>
                        </div>
                    </div>
            @endforeach
        @else
            <div class="jumbotron">
                <h1>Wow, such empty! </h1>
            </div>
        @endif
    </div>
@endsection