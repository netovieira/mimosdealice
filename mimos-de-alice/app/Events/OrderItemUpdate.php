<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;

class OrderItemUpdate
{
    use InteractsWithSockets, SerializesModels;

    public $orderItem,
           $orderOldPrice;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItem $orderItem, $orderOldPrice)
    {
        $this->orderItem = $orderItem;
        $this->orderOldPrice = $orderOldPrice;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('OrderItemUpdateChannel');
    }
}
