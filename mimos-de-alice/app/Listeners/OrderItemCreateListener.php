<?php

namespace App\Listeners;

use App\Events\OrderItemCreate;

class OrderItemCreateListener
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
     * @param  OrderItemCreate  $event
     * @return void
     */
    public function handle(OrderItemCreate $event)
    {
        $orderItem = $event->orderItem;
        $orderItem->Order()->price += $orderItem->price;
        $orderItem->Order()->save();
    }
}
