<?php
    function message ($text, $style = 'alert-success'){
    return <<< EOT
    <div class="container">
        <div class="alert alert-block $style">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>$text</strong>
        </div>
    </div>
EOT;
    };
?>

{{-- Errors --}}
@if(count($errors))
    @foreach ($errors->all() as $error)
        <?= message($error, 'alert-danger'); ?>
    @endforeach
@endif

{{-- Success --}}
@if (session('success'))
    <?= message(session('success'), 'alert-success'); ?> 
@endif

{{-- Warning --}}
@if (session('warning'))
    <?= message(session('warning'), 'alert-warning'); ?> 
@endif

{{-- Error --}}
@if (session('error'))
    <?= message(session('error'), 'alert-error'); ?> 
@endif

{{-- Info --}}
@if (session('info'))
    <?= message(session('info'), 'alert-info'); ?> 
@endif