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
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Recipes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="book">Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="about">About</a>
            </li>
        </ul>
    </div>
</nav>