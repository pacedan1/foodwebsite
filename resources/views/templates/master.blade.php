<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/app.css">

        {{-- Title --}}
        <title>@yield('title')</title>
    </head>
    <body class="container vh-min-100">
        @include('inc.navbar')

            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>

        {{-- Import Scripts --}}
        <script src="js/app.js"></script>
    </body>
</html>