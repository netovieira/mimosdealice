<?php

namespace App\Listeners;

use App\Events\RecipeDelete;

class RecipeDeleteListener
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
     * @param  RecipeDelete  $event
     * @return void
     */
    public function handle(RecipeDelete $event)
    {

        $recipe = $event->recipe;
        $cost = $recipe->cost;
        $quantity = $recipe->quantity;
        $cost = $cost/$quantity;

        $products = $recipe->Products();
        foreach ($products as $product){
            $product->cost -= $cost;
            $product->save();
        }
    }
}
