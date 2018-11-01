<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/app.css">

        {{-- Title --}}
        <title>@yield('title')</title>
    </head>
    <body class="container-fluid p-0 vh-min-100">
        {{-- NavBar --}}
        @include('inc.navbar')

        {{-- Banner --}}
        {{-- @yield('banner') --}}

        {{-- Main Content --}}
        @yield('content')

        {{-- Import Scripts --}}
        <script src="../js/app.js"></script>
    </body>
</html>