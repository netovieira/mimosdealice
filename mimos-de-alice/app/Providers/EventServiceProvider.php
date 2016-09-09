<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\RecipeUpdate' => [
            'App\Listeners\RecipeUpdateListener'
        ],
        'App\Events\RecipeDelete' => [
            'App\Listeners\RecipeDeleteListener'
        ],
        'App\Events\OrderItemCreate' => [
            'App\Listeners\OrderItemCreateListener'
        ],
        'App\Events\OrderItemUpdate' => [
            'App\Listeners\OrderItemUpdateListener'
        ],
        'App\Events\OrderItemDelete' => [
            'App\Listeners\OrderItemDeleteListener'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
