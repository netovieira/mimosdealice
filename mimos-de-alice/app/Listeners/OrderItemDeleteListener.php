<?php

namespace App\Listeners;

use App\Events\OrderItemDelete;
use App\Order;

class OrderItemDeleteListener
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
     * @param  OrderItemDelete  $event
     * @return void
     */
    public function handle(OrderItemDelete $event)
    {
        $orderID = $event->orderID;
        $orderPrice = $event->orderPrice;
        $order = Order::find($orderID);
        $order->price -= $orderPrice;

        if ($order->Items()->count() <= 0 ){
            $order->delete();
        }else{
            $order->save();
        }
    }
}
