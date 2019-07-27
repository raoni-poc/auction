<?php

namespace App\Interfaces;

use DateTimeInterface;

interface GetCreatedAtInterface
{
    public function getCreatedAt(): DateTimeInterface;
}