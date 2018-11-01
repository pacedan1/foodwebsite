{{-- Check current URI --}}
<?php $page = Route::current()->uri()?>

<nav class="navbar navbar-expand-md flex-column navbar-dark bg-info">
    {{-- Logo --}}
    <a class="navbar-brand mx-4 my-2 m-md-0 py-2" href="#">
        <img class="img-fluid" src="images/navicon.png" alt="This is a Food Website">
    </a>

    {{-- Dropdow Button --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menus --}}
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            {{-- Home --}}
            @if ($page == '/')
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
            @endif
            </li>

            {{-- Recipes --}}
            @if ($page == 'recipes')
            <li class="nav-item active">
                <a class="nav-link" href="recipes">Recipes <span class="sr-only">(current)</span></a>
            @else
            <li class="nav-item">
                <a class="nav-link" href="recipes">Recipes</a>
            @endif
            </li>

            {{-- Book --}}
            @if ($page == 'book')
            <li class="nav-item active">
                <a class="nav-link" href="book">Book <span class="sr-only">(current)</span></a>
            @else
            <li class="nav-item">
                <a class="nav-link" href="book">Book</a>
            @endif
            </li>

            {{-- About --}}
            @if ($page == 'about')
            <li class="nav-item active">
                <a class="nav-link" href="about">About <span class="sr-only">(current)</span></a>
            @else
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            @endif
            </li>
        </ul>
    </div>
</nav>