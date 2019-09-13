<?php

namespace App\Events;

use App\Models\User;

class UserWasCreatedEvent
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
