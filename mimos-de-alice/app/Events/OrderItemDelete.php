<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;

class OrderItemDelete
{
    use InteractsWithSockets, SerializesModels;

    public $orderID;
    public $orderPrice;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($orderID, $orderPrice)
    {
        $this->orderID = $orderID;
        $this->orderPrice = $orderPrice;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('OrderItemDeleteChannel');
    }
}
