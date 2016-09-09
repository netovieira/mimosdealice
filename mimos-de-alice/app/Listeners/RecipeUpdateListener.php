<?php

namespace App\Listeners;

use App\Events\RecipeUpdate;

class RecipeUpdateListener
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
     * @param  RecipeUpdate  $event
     * @return void
     */
    public function handle(RecipeUpdate $event)
    {

        $recipe = $event->recipe;
        $cost = $recipe->cost;
        $quantity = $recipe->quantity;
        $cost = $cost/$quantity - $event->oldCost;

        $products = $recipe->Products();
        foreach ($products as $product){
            $product->cost += $cost;
            $product->save();
        }
    }
}
