@component('layouts.app')
@slot('title')
    Images
@endslot
@slot('content')
<div class="container">
    <div class="row">
        @component('components/thumbnail')
            @slot('title', 'Laravel 5.4')
            @slot('image', asset('img/laravel5.jpg'))
            @slot('description')
                Comunidad de Desarrollo Web
        @endcomponent
        




    </div>
</div>
@endslot
@endcomponent
