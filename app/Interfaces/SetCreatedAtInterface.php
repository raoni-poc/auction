<?php

namespace App\Interfaces;

use DateTimeInterface;

interface SetCreatedAtInterface
{
    public function setCreatedAt(DateTimeInterface $dateTime): void;
}