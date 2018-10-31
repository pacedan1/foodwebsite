{{-- extend master template --}}
@extends('templates.master')

{{-- Display title received from conroller --}}
@section('title', $title)

{{-- Main Content --}}
@section('content')

    @component('inc.banner')
        {{-- size of banner --}}
        @slot('size', 1)
        {{-- img path --}}
        @slot('imgPath')
            images/home-cover.jpg
        @endslot

        {{-- Main Banner Content --}}
        <div class="container">
            <h1 class="display-3 font-weight-bold">Welcome to FoodWebsite.com</h1>
            <p class="font-weight-bold">For all tastey and healthy recipes you need</p>
        </div>
    @endcomponent

    Test

@endsection