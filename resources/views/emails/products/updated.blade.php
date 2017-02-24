@component('mail::message')
# {{ $product->name }}

El producto **{{ $product->name }}** fue actualizado!

@component('mail::button', ['url' => 'products/'.$product->name])
Ver producto
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
