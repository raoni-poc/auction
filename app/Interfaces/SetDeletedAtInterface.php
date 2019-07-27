<?php


namespace App\Interfaces;


use DateTimeInterface;

interface SetDeletedAtInterface
{
    public function setDeletedAt(DateTimeInterface $dateTime): self;
}