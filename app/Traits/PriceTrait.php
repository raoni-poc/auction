<?php

namespace App\Traits;

trait PriceTrait
{
    protected $price;

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return (float) $this->price;
    }
}