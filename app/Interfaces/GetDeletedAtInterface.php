<?php


namespace App\Interfaces;


use DateTimeInterface;

interface GetDeletedAtInterface
{
    public function getDeletedAt(): DateTimeInterface;
}