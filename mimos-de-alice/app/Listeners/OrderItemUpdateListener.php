<?php

namespace App\Listeners;

use App\Events\OrderItemUpdate;

class OrderItemUpdateListener
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
     * @param  OrderItemUpdate  $event
     * @return void
     */
    public function handle(OrderItemUpdate $event)
    {
        $orderItem = $event->orderItem;
        $orderItem->Order()->price += $orderItem->price - $event->orderOldPrice;
        $orderItem->Order()->save();
    }
}
