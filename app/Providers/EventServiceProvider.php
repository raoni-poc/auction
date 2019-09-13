<?php

namespace App\Providers;

use App\Events\UserWasCreatedEvent;
use App\Listeners\SendWelcomeMailListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
//        UserWasCreatedEvent::class => [
//            SendWelcomeMailListener::class,
//        ]
    ];

    public function boot()
    {
        parent::boot();
    }
}
