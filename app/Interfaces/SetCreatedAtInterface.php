<?php

namespace App\Interfaces;

use DateTimeInterface;

interface SetCreatedAt
{
    public function setCreatedAt(DateTimeInterface $dateTime): self;
}