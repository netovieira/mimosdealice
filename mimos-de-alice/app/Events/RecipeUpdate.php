<?php

namespace App\Events;

use App\Recipe;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;

class RecipeUpdate
{
    use InteractsWithSockets, SerializesModels;

    public $recipe,
           $oldCost;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Recipe $recipe, $oldCost)
    {
        $this->recipe = $recipe;
        $this->oldCost = $oldCost;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('recipeUpdateChannel');
    }
}
