<?php

namespace App\Listeners;

use App\Events\UserWasCreatedEvent;
use App\Models\User;
use Log;

class SendWelcomeMailListener
{
    public function __construct()
    {
    }

    public function handle(UserWasCreatedEvent $event)
    {
        /** @var User $user */
        $user = $event->getUser();
        $token = \Password::broker()->createToken($user);
        //$user->sendPasswordResetNotification($token);
        $this->notify(new ResetPasswordNotification($token));

    }
}
