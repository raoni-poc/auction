<?php

namespace App\Interfaces;

use DateTimeInterface;

interface SetUpdatedAtInterface
{
    public function setUpdatedAt(DateTimeInterface $dateTime): self;
}