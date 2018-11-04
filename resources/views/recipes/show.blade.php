@extends('templates.master')

@section('title')
    {{$recipe->title}}
@endsection

@section('recipe-options')
    <div class="dropdown recipe-options">
        <button class="btn btn-secondary dropdown-toggle"
                type="button" id="recipeOptions" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="recipeOptions">
            <a class="dropdown-item" href="/recipes/{{$recipe->id}}/edit">Edit</a>
            {!! Form::open(['action' => ['RecipesController@destroy', $recipe->id]]) !!}
                {{ Form::hidden('_method', 'delete') }}
                {{ Form::submit('Delete', ['class' => 'btn dropdown-item'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('content')
    <div class="container mw-sm-md-100 bg-white p-md-4">
        {{-- check if recipe exists --}}
        @if($recipe)
            {{-- Header --}}
            <div class="row recipe-header px-md-1 py-md-4 bg-info">
                <div class="col-md flex-grow-0">
                        <img src="{{--- $recipe->image ---}}" alt="" class="img-fluid recipe-image bg-dark d-block m-auto">
                </div>
                <div class="col-md mt-4 text-center text-md-left">
                    <h3>{{$recipe->title}}</h3>
                    <p>{{$recipe->body}}</p>
                </div>
                @yield('recipe-options')
            </div>

            {{-- Mian Section --}}
            <div class="row pt-4">
                {{-- Ingredients --}}
                <div class="col-md-3 bg-white border-0">
                    <h3>Ingredients</h3>
                    <ul class="list-ingredient">
                        {{-- @forelse ($ingredients as $key => $ingredient)
                            @if ($key%2)
                                <li class="list-ingredient-item">{{$ingredient}}</li>
                            @else
                                <li class="list-ingredient-item bg-primary">{{$ingredient}}</li>
                            @endif
                        @empty
                            <p>This recippe requires no ingredients.</p>
                        @endforelse --}}
                    </ul>
                </div>

                {{-- Method --}}
                <div class="col-md bg-white">
                    <h3 class="card-title">Method</h3>
                    <ol class="list-method">
                    {{-- @forelse ($method as $step)
                        <li class="list-method-items">
                            {{$step}}
                        </li>
                    @empty
                        <p>No steps available for this recipe.</p>
                    @endforelse --}}
                    </ul>
                </div>
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