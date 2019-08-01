<?php

namespace App\Traits;

use App\Interfaces\SoftDeleteInterface;
use DateTimeInterface;

trait SoftDelete
{
    protected $deteletedAt;

    public function getDeletedAt(): DateTimeInterface
    {
        return $this->deteletedAt;
    }

    public function setDeletedAt(DateTimeInterface $dateTime): void
    {
        $this->deteletedAt = $dateTime;
    }
}