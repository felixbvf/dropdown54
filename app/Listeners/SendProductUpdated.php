<?php

namespace App\Listeners;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\ProductUpdate;
use App\Mail\ProductUpdated;

class SendProductUpdated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductUpdate  $event
     * @return void
     */
    public function handle(ProductUpdate $event)
    {
        //dd('Producto Modificado', $event->product->toArray());
        Mail::to('fbalderrama@muserpol.gob.bo')
            ->send(new ProductUpdated($event->product));
    }
}
