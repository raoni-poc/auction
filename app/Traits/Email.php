<?php

namespace App\Traits;

trait Email
{
    protected $email;

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->getEmail();
    }

}