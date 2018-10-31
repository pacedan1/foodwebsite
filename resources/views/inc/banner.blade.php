{{-- Banner to be used whenever required --}}
{{-- $size: send true for full size banner, else half page banner --}}
{{-- $imgPath: send path of image to be displayed --}}
{{-- $slot: main content --}}

{{-- if statement to display correct header --}}
<header class= <?= $size? "container-banner" : "container-banner-half" ?> >
    <img src= "{{ $imgPath }}" alt="This is the home banner" class="img-fluid center">
    <div class="overlay"></div>
    <div class="container d-flex w-100 h-100">
        <div class="container m-auto text-center">
            {{ $slot }}
        </div>
    </div>
</header>

{{-- TODO - Adaptive image scaling --}}