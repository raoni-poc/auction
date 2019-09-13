<?php

namespace App\Providers;

use App\Events\UserWasCreatedEvent;
use App\Listeners\SendWelcomeMailListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        UserWasCreatedEvent::class => [
            SendWelcomeMailListener::class,
        ]
    ];

    public function boot()
    {
        parent::boot();
    }
}
