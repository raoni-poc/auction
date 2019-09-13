<?php

namespace App\Listeners;

use App\Events\UserWasCreatedEvent;
use App\Models\User;
use Illuminate\Auth\MustVerifyEmail;
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
        $user->sendPasswordResetNotification($token);
//        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
//            $user->sendEmailVerificationNotification();
//        }

    }
}
