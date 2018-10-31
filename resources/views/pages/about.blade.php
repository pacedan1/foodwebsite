@extends('templates.master')

@section('title', $title)

@section('content')
    @component('inc.banner')
        @slot('size', false)
        @slot('imgPath', 'images/home-cover.jpg')

        <h1 class="font-weight-bold">{{ $title }}</h1>
    @endcomponent
@endsection